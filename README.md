# JP Agro Industries

A responsive Core PHP corporate website for an agricultural machinery and precision manufacturing company.

## Requirements

- PHP 7.4 or newer
- Apache/XAMPP or another standard PHP host
- PHP mail configuration for the contact form to send messages

## Local setup

1. Place the project folder inside your web server's document root (for XAMPP, `htdocs`).
2. Start Apache from the XAMPP control panel.
3. Open the project folder under `http://localhost/` (for this checkout: `http://localhost/jpagro/`).
4. Update the contact values in `config/config.php` before publishing.

The application detects its URL base path from the executing PHP script, so it works from the domain root or a subfolder without changing paths when deployed.

## Structure

- `index.php` routes the public pages through one entry point.
- `config/config.php` contains site settings, security helpers and reusable data arrays.
- `includes/` contains the shared header, footer and navigation.
- `pages/` contains page-specific content.
- `forms/contact-process.php` validates and handles contact submissions.
- `assets/` contains CSS, JavaScript and local image assets.

## Contact form

The form uses a session CSRF token, server-side validation, escaped output and configurable `mail()` delivery. For production, set `CONTACT_EMAIL`, `PHONE_NUMBER`, `WHATSAPP_NUMBER` and `COMPANY_ADDRESS` to the correct business details. If the hosting provider disables `mail()`, connect the processor to the host's approved SMTP service.

## Branding and imagery

The supplied workspace did not contain original image files, so the included visual assets are lightweight local SVG illustrations. They are organized under the requested image folders and can be replaced with supplied WebP/JPG assets without changing the page templates.
