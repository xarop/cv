
---

# CV — Adrià Julià Lundgren

**Live:** https://xarop.com/cv/
**Contact:** ajl@xarop.com

---

## Structure

| File              | Role                                              |
|-------------------|--------------------------------------------------|
| targets.php       | All data: profile info and per-target CV content  |
| index.php         | Main CV page                                      |
| letter.php        | Cover letter page                                 |
| contact.php       | Contact form                                      |
| list-targets.php  | Admin index of all CV targets                     |
| head.php          | Shared `<head>` — loads targets, fonts, CSS       |
| aside.php         | Sidebar: photo, contact, nav, actions             |
| footer.php        | Footer + Google Analytics                         |
| styles.css        | All styles                                        |

## URL routing (`.htaccess`)

```
/cv/                    → index.php (target: generic)
/cv/{target}            → index.php?for={target}
/cv/letter/{target}     → letter.php?for={target}
/cv/contact             → contact.php
/cv/targets             → list-targets.php
```

## Adding a CV target

Add an entry to the `$targets` array in `targets.php`:

```php
'key' => [
    'company'      => 'Company Name',
    'intro_title'  => 'Job Title',
    'intro_bio'    => '...',
    'intro_bio_2'  => '...',
    'intro_bio_3'  => '...',   // optional
    'intro_bio_4'  => '...',   // optional
    'tech_stack'   => '...',
    'letter_intro' => '...',
    'letter_greeting' => 'To the Hiring Team,',
    'letter_date'  => date('F j, Y'),
    'letter_body'  => ['paragraph 1', 'paragraph 2', ...],
],
```

Then access it at `/cv/key` and `/cv/letter/key`.

## Contact form

Emails are sent from `noreply@xarop.com` (server domain, passes SPF/DKIM)
with `Reply-To` set to the visitor's address.
Uses `wp_mail()` if WordPress is available, falls back to `mail()`.

## Automatic deployment (GitHub Actions)

Every time you push to the `main` branch, the contents of `web/cv/` are automatically deployed via SFTP to xarop.com/cv/ using GitHub Actions.

**Required secrets:**
- `FTP_SERVER`
- `FTP_USERNAME`
- `FTP_PASSWORD`

The workflow is in `.github/workflows/deploy.yml` and uses [SamKirkland/FTP-Deploy-Action](https://github.com/SamKirkland/FTP-Deploy-Action).

**Excludes:** hidden files and folders, `.github`, and `README.md`.
