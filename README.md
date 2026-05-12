# BRIDGE — PHP replica

A plain-PHP rebuild of the BRIDGE website (`bridge.edgegroup.ae`).
No frameworks, no build step. Plain PHP partials, HTML, CSS, and vanilla JS, plus a handful of vendored libraries (Bootstrap CSS, GSAP, ScrollTrigger, Lenis, Split-Type, Odometer) that the original site uses for animations.

## Run locally

Requires PHP 7.4 or newer (PHP 8.x recommended). From this directory:

```bash
php -S localhost:8000
```

Open `http://localhost:8000/` in a browser.

If `php` is not on your PATH on Windows, install PHP from <https://windows.php.net/download/> and use the absolute path, e.g.:

```powershell
C:\php\php.exe -S localhost:8000
```

## Project structure

```
index.php
about-us.php
our-services.php
ecosystem.php
news.php
contact-us.php
site.webmanifest
assets/
  css/
    main.css
    fonts.css
    vendor/bootstrap.min.css
    vendor/odometer-theme-default.css
  js/
    main.js
    vendor/{bootstrap.bundle.min.js,gsap.min.js,ScrollTrigger.min.js,lenis.min.js,split-type.min.js,odometer.js}
  fonts/Halyard*.{eot,ttf,woff,woff2}
  images/...
  images/ecosystem/logo-1..7.png
  ASSET_SOURCES.md
includes/
  config.php         # nav, stats, services, news, awards, contact arrays + helpers
  header.php         # <head>, page-intro overlay, includes nav.php
  nav.php            # sticky glass navbar (uses $CURRENT_PAGE for active state)
  footer.php         # footer + script tags
  sections/
    hero.php
    about.php
    stats.php
    services.php
    ecosystem.php
    news.php
    awards.php
    contact.php
```

## Editing content

Most repeated content lives in PHP arrays at the top of `includes/config.php`:

- `$NAV_ITEMS` — main + footer navigation
- `$STATS_PRIMARY`, `$STATS_SECONDARY` — the achievements/odometer numbers
- `$SERVICES` — service rows on the homepage
- `$NEWS_ITEMS` — news cards (also used on `news.php`)
- `$AWARDS` — awards cards
- `$ECOSYSTEM_LOGOS` — partner logos
- `$CONTACT` — address / phone / email

Page-specific arrays (e.g. detailed service panels on `our-services.php`,
or principles on `about-us.php`) live near the top of those page files.

## Asset attribution

Every asset under `/assets/` is a local copy of a public same-origin file
from the live BRIDGE site. See [`assets/ASSET_SOURCES.md`](assets/ASSET_SOURCES.md).
The hero background uses Vimeo's player iframe and is the only third-party
embed kept inline. Google Fonts (Almarai, Montserrat) load from `fonts.googleapis.com`.

## Deploy to Vercel (static)

The site has no server-side state, so it can be pre-rendered to static HTML and
deployed anywhere that serves files. `build.php` does this:

```bash
php build.php
```

Output lands in `./dist/` (rebuilt every run):

```
dist/
  index.html
  about-us.html
  our-services.html
  ecosystem.html
  news.html
  contact-us.html
  site.webmanifest
  assets/...
```

The builder also rewrites every internal `*.php` link to a clean URL
(`about-us.php` → `/about-us`), matching the `cleanUrls: true` setting in
`vercel.json`. So `/about-us`, `/news`, etc. work on Vercel without any
extra rewrites.

### Deploying

Vercel's default build container doesn't include PHP, so the workflow is:

1. Run `php build.php` locally — this updates `dist/`.
2. Commit `dist/` along with your other changes.
3. Deploy.

`vercel.json` has `buildCommand: null` and `outputDirectory: dist`, so
Vercel simply serves the pre-built `dist/` folder — no PHP needed in the cloud.

Option A — Vercel CLI:

```bash
npm i -g vercel        # one-time
vercel                 # first deploy (prompts for project name)
vercel --prod          # production deploy
```

Option B — Git import:

1. Push this repo (including `dist/`) to GitHub.
2. Go to vercel.com → New Project → import the repo.
3. Vercel auto-detects `vercel.json`; no overrides needed.

### Re-rendering after content changes

Anytime you edit a section, partial, or `includes/config.php`:

```bash
php build.php
git add dist
git commit -m "rebuild"
git push   # triggers Vercel deploy if Git is connected
```

## Notes

- The page-intro loader, hero text/CTA reveal, and "title-animation" stagger
  are driven by `assets/js/main.js` together with GSAP + ScrollTrigger.
  Lenis provides smooth scrolling; the odometer library animates the stats.
- The active nav link is computed from `$CURRENT_PAGE`, which each top-level
  PHP file sets before requiring `includes/config.php` and `includes/header.php`.
- The principles section on `about-us.php` originally referenced a few
  `figma.com/api/mcp/asset/...` icon URLs that aren't reliably reachable;
  this rebuild uses an inline SVG placeholder so the section renders cleanly.
