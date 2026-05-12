# Asset Sources

Every asset under `/assets/` is a local copy of a same-origin file from the live BRIDGE site at `https://bridge.edgegroup.ae/`. No third-party assets are hot-linked except the Vimeo player iframe used for the hero background video, and Google Fonts (Almarai, Montserrat) which are loaded via `fonts.googleapis.com`.

## CSS

| Local path                                      | Original URL                                                    |
| ----------------------------------------------- | --------------------------------------------------------------- |
| `assets/css/main.css`                           | `https://bridge.edgegroup.ae/assets/css/main.css`               |
| `assets/css/fonts.css`                          | `https://bridge.edgegroup.ae/assets/css/fonts.css`              |
| `assets/css/vendor/bootstrap.min.css`           | `https://bridge.edgegroup.ae/assets/css/vendor/bootstrap.min.css` |
| `assets/css/vendor/odometer-theme-default.css`  | `https://bridge.edgegroup.ae/assets/css/vendor/odometer-theme-default.css` |

## JavaScript

| Local path                                  | Original URL                                                  |
| ------------------------------------------- | ------------------------------------------------------------- |
| `assets/js/main.js`                         | `https://bridge.edgegroup.ae/assets/js/main.js?v=10`          |
| `assets/js/vendor/odometer.js`              | `https://bridge.edgegroup.ae/assets/js/vendor/odometer.js`    |
| `assets/js/vendor/bootstrap.bundle.min.js`  | `https://bridge.edgegroup.ae/assets/js/vendor/bootstrap.bundle.min.js` |
| `assets/js/vendor/gsap.min.js`              | `https://bridge.edgegroup.ae/assets/js/vendor/gsap.min.js`    |
| `assets/js/vendor/ScrollTrigger.min.js`     | `https://bridge.edgegroup.ae/assets/js/vendor/ScrollTrigger.min.js` |
| `assets/js/vendor/lenis.min.js`             | `https://bridge.edgegroup.ae/assets/js/vendor/lenis.min.js`   |
| `assets/js/vendor/split-type.min.js`        | `https://bridge.edgegroup.ae/assets/js/vendor/split-type.min.js` |

## Fonts

All under `assets/fonts/` were fetched from `https://bridge.edgegroup.ae/assets/fonts/`:

- HalyardDisplay-Regular.{eot,ttf,woff,woff2}
- HalyardDisplayBook-Regular.{eot,ttf,woff,woff2}

Google Fonts are loaded over the network (not redistributed):
- Almarai (300, 400, 700, 800)
- Montserrat

## Images

All under `assets/images/` were fetched from `https://bridge.edgegroup.ae/assets/images/`:

- about-bg.jpeg
- apple-touch-icon.png
- article-1-image.webp, article-2-image.webp, article-3-image.webp, article-4-image.webp
- banner-bridge_.svg
- banner-bridge__loader.svg
- ecosystem-bg.webp
- faisal-al-bannai.webp
- favicon-96x96.png, favicon.ico, favicon.svg
- logo_bridge_.svg
- news_01.webp, news_02.webp, news_03.webp, news_04.webp
- video_bg.webp

Ecosystem partner logos (`assets/images/ecosystem/`): `logo-1.png` … `logo-7.png`.

## Manifest

- `site.webmanifest` — `https://bridge.edgegroup.ae/site.webmanifest`

## Not bundled

These external resources are loaded over the network and not redistributed:

- Hero background: `https://player.vimeo.com/video/1186158251?background=1&autoplay=1&muted=1&loop=1&quality=auto`
- Google Fonts (Almarai, Montserrat)
- One decorative figma-hosted overlay referenced inside `main.css` at `~26% opacity` (silent fallback if unreachable; visual is non-essential)
- About-Us principle icons: the original references three `figma.com/api/mcp/asset/...` URLs which are not reliably reachable; replaced with an inline SVG placeholder in `about-us.php` so the section renders without 404s.

## Re-downloading

To re-sync assets from the live site:

```bash
UA="Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/130.0.0.0 Safari/537.36"
BASE="https://bridge.edgegroup.ae"
curl -sA "$UA" "$BASE/assets/css/main.css" -o assets/css/main.css
# … etc. (see this file for the full list)
```
