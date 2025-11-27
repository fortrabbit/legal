---
title: Update policies
reviewed: 2025-11-17 12:41:19
lead: This page informs you about when to expect which software updates here on fortrabbit.
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/update-policies.md
---

## Updates performed by customers

* It is the responsibility of the customer to update the software they installed - this includes frameworks and Content Management Systems.

## Updates performed by fortrabbit

The fortrabbit platform is updated to the latest security patches periodically at irregular intervals. This includes backend services such as networking and containerization not visible to customers, but also client-facing software.

### Communication

* Maintenance work with expected downtime will be announced upfront.
* Updates containing possibly breaking changes will be communicated as well. This includes major and minor changes, but usually not patch releases.
* General instructions on how to update applications are provided on a best-effort basis.
* Individual support to update applications is also provided on a voluntary basis.

### New PHP versions

* Two or three main PHP versions to choose are usually provided. This can be different major or minor versions.
* Access to new versions will be provided some time after the final version will be released.
  * This is usually after the first important patch release came out and also once all essential extensions are updated.

### Old PHP versions

* Outdated PHP versions will be removed once the security support ends (end of life) as defined by the PHP project under [php.net/supported-versions](https://www.php.net/supported-versions.php).
* While removing an outdated PHP version, app environments still on that version will be force upgraded to the next old but still supported version of PHP.

### PHP extensions

* PHP extensions are usually updated alongside PHP update maintenance.

### Database versions

* Database patch updates will be applied automatically.

### TLS certificates

* Managed TLS certificates will be automatically installed, approximately every three months.
