# Update policies

last modified: 18th of August 2021

This page informs you about when to expect which software updates here on fortrabbit.

## Updates to be performed by clients

* It is the responsibility of the client to update the software they installed - this includes PHP frameworks and Content Management Systems.
* Custom TLS certificates will need to be updated by the client.

## Updates to be performed by fortrabbit

The fortrabbit platform is updated to the latest security patches periodically at irregular intervals. This includes backend services such as networking and containerization not visible to clients, but also client-facing software. 

### Communication

* Maintenance work with expected downtime will be announced upfront.
* Updates containing possibly breaking changes will be communicated as well. This includes major and minor changes, but usually not patch releases.
* General instructions on how to update applications are provided on a best-effort basis.
* Individual support to update applications is also provided on a voluntary basis.

### New PHP versions

* Two or three main PHP versions to choose from for each App are usually provided. This can be different major or minor versions. 
* Access to new versions will be provided some time after the final version will be released. This is usually after the first important patch release came out and also once all essential extensions are updated.
* Clients can then select the newer PHP version for their Apps with the fortrabbit Dashboard.

### Old PHP versions

* Outdated PHP versions will be removed once the security support ends (end of life) as defined by the PHP project under [php.net/supported-versions](https://www.php.net/supported-versions.php). 
* Clients running Apps on old PHP versions will receive notification. 
* While removing an outdated PHP version, Apps still on that version will be force upgraded to the next old but still supported version of PHP.

### PHP extensions

* PHP extensions are usually updated alongside PHP update maintenance.

### MySQL versions

* There is usually one MySQL version for each App.
* MySQL patch updates will be applied automatically.
* Newer Apps might have newer MySQL versions.

### Let's Encrypt certs

* Let's Encrypt TLS certificates will be automatically redeployed approximately every three months.
