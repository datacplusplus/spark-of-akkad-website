# The Spark of Akkad LLC — Website

Laravel company website: Home, Services, About and Contact pages, a contact form that saves messages to the database, and a floating WhatsApp chat button carrying the company logo.

## Run locally

```bash
php artisan serve
```

Then open http://127.0.0.1:8000

## Change your company details

Edit `.env` (no code changes needed):

```
COMPANY_EMAIL=hello@sparkofakkad.com
COMPANY_PHONE="+1 (555) 555-0123"
COMPANY_LOCATION="United States"
WHATSAPP_NUMBER=15555550123        # country code + number, digits only
WHATSAPP_MESSAGE="Hello Spark of Akkad, I would like to talk about a project."
```

Run `php artisan config:clear` after editing.

## Where things are

| What | File |
|---|---|
| Logo (full, for print/social) | `public/images/logo.svg` |
| Browser icon | `public/favicon.svg` |
| Logo mark used on the site | `resources/views/partials/logo-mark.blade.php` |
| WhatsApp floating button | `resources/views/partials/whatsapp-button.blade.php` |
| Services list (site + form) | `config/services_list.php` |
| Pages | `resources/views/pages/*.blade.php` |
| Styles / script | `public/css/site.css`, `public/js/site.js` |
| Contact messages | `contact_messages` table (`App\Models\ContactMessage`) |

Read saved messages: `php artisan tinker --execute "App\Models\ContactMessage::latest()->get()"`

## The logo

An eight-pointed Mesopotamian star whose points are cuneiform wedges (Akkadian writing). They meet at a glowing center, like a spark. Colors are lapis blue (`#0E2A6B`) with gold (`#F5B53D`) and ember (`#FF7A2F`).
