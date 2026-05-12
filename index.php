<?php
$CURRENT_PAGE = 'index.php';
$PAGE_TITLE   = 'BRIDGE — Innovate. Transform. Elevate.';
$BODY_CLASS   = 'page-intro-active';
require __DIR__ . '/includes/config.php';
include   __DIR__ . '/includes/header.php';
?>

<?php include __DIR__ . '/includes/sections/hero.php'; ?>
<?php include __DIR__ . '/includes/sections/about.php'; ?>
<?php include __DIR__ . '/includes/sections/stats.php'; ?>
<?php include __DIR__ . '/includes/sections/services.php'; ?>
<?php include __DIR__ . '/includes/sections/news.php'; ?>
<?php include __DIR__ . '/includes/sections/awards.php'; ?>
<?php include __DIR__ . '/includes/sections/contact.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
