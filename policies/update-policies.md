---
title: Update policies
description: 'When fortrabbit updates platform software, PHP versions, extensions, databases and TLS certificates, and which updates customers handle themselves.'
seo:
  title: How platform software updates work
created: 2021-08-10
updated: 2026-11-18
reviewed: 2026-11-18
ai: co-authored
navigation.excerpt: When and what we update.
lead: This page informs you about when to expect which software updates here on fortrabbit.
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/policies/update-policies.md
---

## Updates performed by customers

It is the responsibility of the customer to update the software they installed - this includes frameworks and content management systems.

## Updates performed by fortrabbit

The fortrabbit platform is updated to the latest security patches periodically at irregular intervals. This includes backend services such as networking and containerization not visible to customers, but also customer-facing software.

### Communication

- Maintenance work with expected downtime will be announced upfront.
- Updates containing possibly breaking changes will be communicated as well. This includes major and minor changes, but usually not patch releases.
- General instructions on how to update applications are provided on a best-effort basis.
- Individual support to update applications is also provided on a voluntary basis.

### New PHP versions

- Two or three main PHP versions to choose are usually provided. This can be different major or minor versions.
- Access to new versions will be provided some time after the final version will be released.
  - This is usually after the first important patch release came out and also once all essential extensions are updated.

### Old PHP versions

- A PHP version is outdated once its security support ends (end of life) as defined by the PHP project under [php.net/supported-versions](https://www.php.net/supported-versions.php).
- Outdated PHP versions stay available as long as running them is secure and maintainable for us. They are provided as is, without security fixes.
- Outdated PHP versions may cost extra. The docs list the current fees under legacy PHP versions.
- A serious vulnerability in an outdated PHP version can force us to retire that version at any time.
- When an outdated PHP version is retired, app environments still on that version will be upgraded to the next newer version of PHP.

### PHP extensions

- PHP extensions are usually updated alongside PHP update maintenance.

### Database versions

- Database patch updates will be applied automatically.

### TLS certificates

- Managed TLS certificates will be automatically installed, approximately every three months.
