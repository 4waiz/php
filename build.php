<?php
/**
 * Static site generator.
 *
 * Runs each top-level *.php page through PHP, captures the HTML output,
 * and writes it into ./dist/ alongside a copy of /assets and other public files.
 *
 * Usage:
 *   php build.php
 *
 * The contents of ./dist/ are what gets deployed to Vercel / Netlify / Pages.
 */

declare(strict_types=1);

$ROOT = __DIR__;
$DIST = $ROOT . DIRECTORY_SEPARATOR . 'dist';

// 1) Reset dist/
if (is_dir($DIST)) {
    rrmdir($DIST);
}
mkdir($DIST, 0777, true);

// 2) Discover top-level *.php pages (skip helper/build files).
$skip = ['build.php'];
$pages = [];
foreach (glob($ROOT . '/*.php') as $path) {
    $name = basename($path);
    if (!in_array($name, $skip, true)) {
        $pages[] = $name;
    }
}

// 3) Render each page.
foreach ($pages as $page) {
    $html = render_page($ROOT . '/' . $page);
    $outName = ($page === 'index.php') ? 'index.html' : preg_replace('/\.php$/', '.html', $page);
    file_put_contents($DIST . '/' . $outName, $html);
    echo "rendered  $page  ->  dist/$outName  (" . strlen($html) . " bytes)\n";
}

// 4) Copy static folders/files into dist/.
$copyList = ['assets', 'site.webmanifest'];
foreach ($copyList as $entry) {
    $src = $ROOT . DIRECTORY_SEPARATOR . $entry;
    if (!file_exists($src)) continue;
    $dst = $DIST . DIRECTORY_SEPARATOR . $entry;
    if (is_dir($src)) {
        rcopy($src, $dst);
    } else {
        copy($src, $dst);
    }
    echo "copied    $entry  ->  dist/$entry\n";
}

echo "\nDone. Static site is in ./dist/\n";

// ---------- helpers ----------

function render_page(string $phpFile): string {
    // Tell partials this is a static build so they can drop relative-path quirks if needed.
    $GLOBALS['STATIC_BUILD'] = true;

    // Pretend each request comes through the file itself so basename($_SERVER['PHP_SELF']) works.
    $_SERVER['PHP_SELF']    = '/' . basename($phpFile);
    $_SERVER['SCRIPT_NAME'] = '/' . basename($phpFile);
    $_SERVER['REQUEST_URI'] = '/' . basename($phpFile);

    ob_start();
    // Each top page defines its own $CURRENT_PAGE / $PAGE_TITLE / requires config + header.
    // Run in a function scope so vars don't leak between pages.
    (static function (string $f): void { require $f; })($phpFile);
    $html = ob_get_clean();

    // Rewrite .php links to clean URLs (matches our vercel.json rewrites).
    // index.php -> /, others -> /<name without .php>
    $html = preg_replace_callback(
        '/(href|action)="([^"#?]*?)\.php(\?[^"]*)?(#[^"]*)?"/',
        function ($m) {
            $attr  = $m[1];
            $base  = $m[2];
            $query = $m[3] ?? '';
            $hash  = $m[4] ?? '';
            // Leave external URLs alone (with scheme).
            if (preg_match('~^[a-z]+://~i', $base)) {
                return $m[0];
            }
            $target = ($base === 'index') ? '/' : '/' . $base;
            return $attr . '="' . $target . $query . $hash . '"';
        },
        $html
    );

    return $html;
}

function rrmdir(string $dir): void {
    if (!is_dir($dir)) return;
    foreach (scandir($dir) as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $entry;
        is_dir($path) ? rrmdir($path) : unlink($path);
    }
    rmdir($dir);
}

function rcopy(string $src, string $dst): void {
    if (!is_dir($dst)) mkdir($dst, 0777, true);
    foreach (scandir($src) as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        $sPath = $src . DIRECTORY_SEPARATOR . $entry;
        $dPath = $dst . DIRECTORY_SEPARATOR . $entry;
        if (is_dir($sPath)) {
            rcopy($sPath, $dPath);
        } else {
            copy($sPath, $dPath);
        }
    }
}
