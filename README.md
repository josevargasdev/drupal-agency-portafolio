# Agency Portfolio — Drupal 11

A fully functional agency portfolio site built with Drupal 11 as a learning project. Showcases projects, services, team members, and a contact form.

🌐 **Live Demo:** [josevargasdev.github.io/drupal-agency-portfolio](https://josevargasdev.github.io/drupal-agency-portfolio/)

---

## Tech Stack

- **CMS:** Drupal 11
- **Local environment:** DDEV
- **Theme:** Custom Olivero subtheme (`agency_theme`)
- **Modules:** Webform, Views, Tome (static site generator)
- **Languages:** PHP, CSS, Twig, HTML

---

## Features

- Custom Olivero subtheme with brand colors, typography, and responsive layout
- **Projects** — filterable grid with technology tags
- **Services** — two-column card layout
- **Team** — member profiles with photo, role, and bio
- **Contact** — Webform with Name, Email, Subject, and Message fields
- **Footer stats** — dynamic block showing live counts (Projects, Team Members, Services) with SVG icons and links
- Custom PHP block plugin (`AgencyStatsBlock`) querying the Drupal database
- Static HTML export via [Tome](https://www.drupal.org/project/tome) for GitHub Pages deployment
- Fully responsive — mobile menu, stacked layouts, adaptive footer

---

## Local Setup

Requirements: [DDEV](https://ddev.readthedocs.io/en/stable/) + Docker

```bash
git clone https://github.com/josevargasdev/drupal-agency.git
cd drupal-agency
ddev start
ddev composer install
ddev drush site:install --existing-config -y
ddev drush cr
```

Then open: `https://agency-portfolio.ddev.site`

---

## Static Export (Tome)

The live demo was generated using Tome:

```bash
ddev drush tome:static
```

Output is in the `html/` directory and deployed to GitHub Pages.

---

## Project Structure

```
web/
├── themes/custom/agency_theme/   # Custom subtheme
│   ├── css/style.css             # All custom styles
│   └── templates/                # Twig overrides
├── modules/custom/agency_stats/  # Custom stats block plugin
└── profiles/                     # Drupal config
config/sync/                      # Exported Drupal configuration
```

---

## Author

**José Vargas** — Full Stack Developer  
PHP · Drupal · WordPress · .NET · JavaScript  
[github.com/josevargasdev](https://github.com/josevargasdev)
