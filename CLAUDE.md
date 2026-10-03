# The Spark of Akkad LLC — Company Website

Business website for **The Spark of Akkad LLC**, a new technology company (web, mobile, cloud, AI, cybersecurity, IT consulting). Everything in the site should tie back to the name: Akkad (ancient Mesopotamia, cuneiform = early information technology) + "spark" (new beginnings, energy).

- Owner: Hasan Tameemi. Explain things simply. The owner is new to this, so give exact steps.
- The company is brand new: **never invent clients, testimonials, stats or awards.**

## Stack

- Laravel 13, PHP 8.3 (WAMP at `C:\wamp64`), SQLite, Windows 11.
- No Vite/npm build. Plain CSS/JS in `public/css/site.css` and `public/js/site.js` (bump `?v=` in the layout when changed).
- Fonts: Inter, Space Grotesk, Noto Sans Cuneiform (Google Fonts).
- Laravel Boost was intentionally **not** installed; don't install it unless asked.

## Brand

- Logo = Mesopotamian eight-pointed star whose points are cuneiform wedges meeting at a glowing center (the spark).
- Colors: lapis blue `#0E2A6B` / `#0B1F4F` / `#071636`, gold `#F5B53D`, deep gold `#C98A12`, ember `#FF7A2F`, sand `#F7F1E6`, WhatsApp green `#25D366`.
- Tagline: "Ancient ingenuity. Modern technology."
- Files: `public/images/logo.svg` (full logo), `public/favicon.svg`, `resources/views/partials/logo-mark.blade.php` (inline mark).

## Structure

| What | Where |
|---|---|
| Company details (email, phone, WhatsApp number) | `config/company.php` (defaults = live site values; `.env` overrides locally) |
| Services list (site + contact form) | `config/services_list.php` |
| Routes | `routes/web.php`: `/`, `/services`, `/about`, `/contact`, POST `/contact` |
| Layout / pages | `resources/views/layouts/app.blade.php`, `resources/views/pages/*.blade.php` |
| Partials | `resources/views/partials/` (logo-mark, icon, whatsapp-button, whatsapp-icon, cta) |
| Contact form | `App\Http\Controllers\ContactController` → `contact_messages` table (`App\Models\ContactMessage`) |
| Static export | `php artisan site:export` (`App\Console\Commands\ExportStaticSite`) → `build/` |

WhatsApp: floating button on every page with logo badge plus buttons in hero/CTA/contact. Number is digits only with country code.

## Hosting & GitHub

- Repo: https://github.com/datacplusplus/spark-of-akkad-website (public, branch `main`).
- **Always use the personal GitHub account `datacplusplus`, never the university account `informaticsIJSU`.** Run `gh auth switch -u datacplusplus` before any `gh` command.
- Pushing: the repo's local git config uses `!gh auth git-credential`; push with `GIT_TERMINAL_PROMPT=0 git push` (the Windows credential popup otherwise hangs).
- Live site (GitHub Pages): https://datacplusplus.github.io/spark-of-akkad-website/
- `.github/workflows/pages.yml` deploys on every push to `main`: composer install → `site:export` with `APP_URL` = Pages URL, `SESSION_DRIVER=array`, `CACHE_STORE=array` → deploy.
- On Pages there is no PHP: `site.static` config is set during export, and the contact form then opens WhatsApp with the message prefilled (JS in `site.js`) instead of POSTing.
- If a new page is added, also add it to `$pages` in `ExportStaticSite`.
- Links must be generated with `route()`/`asset()` (export forces root URL + https scheme), not hard-coded `/paths`.

## Local development

```bash
php artisan serve          # http://127.0.0.1:8000
php artisan site:export    # test the static build (output in build/, gitignored)
```

Verify visually with headless Edge:
`"/c/Program Files (x86)/Microsoft/Edge/Application/msedge.exe" --headless=new --screenshot=out.png --window-size=1300,900 URL` (minimum width is about 500px).

## Open to-dos

- Replace placeholder contact details in `config/company.php` (WhatsApp `15555550123`, phone, `hello@sparkofakkad.com`) with real ones.
- Delete the stray copy `informaticsIJSU/spark-of-akkad-website` (needs `gh auth refresh -h github.com -u informaticsIJSU -s delete_repo`; the user must run it).
- Optional: custom domain (repo Settings → Pages), admin page for contact messages, real Laravel hosting if server features are needed.
