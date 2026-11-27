# Welingkar 360° Hybrid PGDM: landing page

The Hybrid PGDM landing page, built as a small PHP application in the MVC pattern, to run on welingkar.org.

- Design: hero, proof strip and GenWe Playbook follow the client's Figma file ("WESCHOOL Website", page "Landing page final"). The other sections use the same brand.
- Copy: "Welingkar Landing page Content.docx" (November 2026), plus the approved content PDF for FAQ answers, eligibility and alumni material.
- No framework or packages needed: PHP 7.4 or newer on Apache.

## How it is organised (MVC in plain words)

MVC splits a website into three jobs, each in its own folder:

| Part | Job | Where |
|---|---|---|
| **Model** | Holds the content. Every word on the page lives in one file. | `content/hybrid-pgdm.php`, read by `app/Models/LandingPage.php` |
| **View** | Decides how things look. One template per section. | `app/Views/` (`landing/sections/hero.php`, `fees.php`, …) |
| **Controller** | Takes a web address, fetches the content, picks the view. | `app/Controllers/LandingController.php`, addresses in `app/routes.php` |

So, to change a fee you edit the content file; to change how the fees block looks you edit its view; neither touches the other.

```
hybrid-pgdm/
├── .htaccess                 sends every request into public/, keeps the rest private
├── public/                   the only folder the web can see
│   ├── index.php             front controller: every request starts here
│   ├── .htaccess             routing, caching, compression
│   └── assets/               css/main.css, js/main.js, img/, fonts/
├── app/
│   ├── Controllers/          LandingController (page, thank-you), ErrorController (404)
│   ├── Models/               LandingPage (loads the content)
│   ├── Views/                layouts/, partials/ (header, footer, icons), landing/sections/
│   ├── Core/                 tiny router, view renderer, config
│   ├── routes.php            address → controller map
│   └── helpers.php           escaping, asset URLs, icons
├── config/app.php            settings per server (address, CRM form, brochure, analytics)
├── content/hybrid-pgdm.php   ALL page copy
├── tools/build-static.php    makes a static snapshot in dist/
└── dist/                     static snapshot for review (open dist/index.html)
```

Pages: `/` (landing page), `/thank-you` (after an enquiry; point the CRM redirect here to count ad conversions), anything else returns a 404 page.

## Editing

- **Words, figures, FAQs:** `content/hybrid-pgdm.php`. Change the text between quotes, keep the keys. Allowed inline tags: `<b>`, `<em>`, `<br>`.
- **SEO copy and keywords:** the `seo` block in the content file. It prints at the very bottom of the page, above the footer; add the client's keyword list to `keywords`.
- **Writing style:** headings in sentence case (only names keep capitals). The programme name is "360° Hybrid PGDM"; "Welingkar PGDM Hybrid" is a search keyword and stays as written, without 360°.
- **Section order, or hiding a section:** the `order` list at the top of the content file.
- **Images:** `public/assets/img/`. Replace a file with one of the same name, or change the file name in the content file.
- **Colours and spacing:** the variables at the top of `public/assets/css/main.css` (`--green`, `--purple`, `--lime`, …).

## Run it on a computer

With PHP installed: `cd public` then `php -S localhost:8080`, and open http://localhost:8080.
Without PHP: open `dist/index.html` (a snapshot; rebuild it with `php tools/build-static.php` after edits).

## Review link (GitHub + Vercel)

Vercel publishes the static snapshot in `dist/` (set in `vercel.json`; no build step, and every page is sent with `noindex`). After any edit: run `php tools/build-static.php`, commit, push; Vercel redeploys on its own.

The enquiry form on the review link is the live CRM form: a test submission creates a real lead.

## Put it live on welingkar.org

welingkar.org runs Drupal 7 on Apache. The landing page lives beside it in its own folder and does not touch Drupal.

1. Copy the whole `hybrid-pgdm` folder into the web root, so it sits at `welingkar.org/hybrid-pgdm/`. Apache uses this folder's `.htaccess` instead of Drupal's for anything under that address. (If links break, uncomment `RewriteBase /hybrid-pgdm/` in `.htaccess`.)
2. In `config/app.php`:
   - `canonical_url` → the final address.
   - `brochure_url` → the brochure PDF (until then, the Brochure buttons open the enquiry form).
   - `gtm_id` / `meta_pixel` → the ad tracking IDs.
   - `show_placeholders` → `false` (hides the dashed "placeholder" markers).
3. Ask the CRM team to confirm that ExtraaEdge form-24 accepts enquiries from welingkar.org, and to set its "after submit" redirect to `/hybrid-pgdm/thank-you`.
4. Submit one test enquiry with the CRM team watching.

The server needs `mod_rewrite` (Drupal already uses it). `mod_expires`, `mod_deflate` and `mod_headers` are used if present.

## Waiting on Welingkar

| Item | Where it shows | Now |
|---|---|---|
| Impact stories: videos, photos, quotes, names | Impact Stories | Placeholder text and stock-style photos from the Figma file |
| Brochure PDF | Hero, phone bar | Opens the enquiry form |
| ExtraaEdge form on welingkar.org | Hero | Uses form-24 from the Yangpoo account |
| Industry-background figures | (not on this page) | Live page shares add up to 81% |

## Notes on the design

- Hero: copied from Figma ("Landing page final" › "Final Design") with the black outlines removed. The student, triangle lattice, tags and the three triangles on the right sit at the Figma frame's exact positions; the lattice is vectorised from the Figma artwork, so it stays sharp. The wordmark's baked-in "360° HYRBID PGDM" typo is replaced by live text, "360° Hybrid PGDM".
- GenWe Playbook: the mascots and the sixth pillar (WeFlex) come from the updated Figma file; WeFlex is not in the content document.
- Programme features: the photograph stands on its own and the eight features are equal tiles alternating white and purple, as the client asked.
- White text on the green and purple buttons keeps the Figma gradients, deepened where the text sits so it stays readable (WCAG AA).
- Accessibility: one page heading, labelled sections, keyboard-usable accordions and carousels, reduced-motion support (the pinned section becomes a normal list).
- SEO: title, description, canonical, social preview image, and structured data (CollegeOrUniversity, Course, FAQPage).
