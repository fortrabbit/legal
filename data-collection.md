# Data collection and retention

last modified: 17th of August 2021

This sections answers questions such as these: What kind of data is kept? When is data deleted Generally speaking, our aim is to store only the minimum data required and to delete as much as possible whenever possible.

fortrabbit stores various types of data during hosting operations to perform relevant business functions. For some of this data fortrabbit clients have full control about erasure, other data needs to be kept for a longer period. Retention periods depend on the different types of data stored.

If a law enforcement request, legal obligation or business need requires it, data may be retained longer than the original purpose as described here.

## Dashboard data

The data stored in our client database is only accessible for individual clients protected by username/password login. Two-factor authentication is available.

### Account

Client Account data containing information on name, e-mail, geo location, usage and more is retained for as long as the Account is active. Clients can erase associated data by deleting their Account with the fortrabbit Dashboard. fortrabbit may keep anonymized hints on pre-existing Accounts to keep track of historic events.

### Company

In the fortrabbit Dashboard, there are Companies, consisting of team members and Billing Contacts. They can also be deleted by clients directly with the fortrabbit Dashboard.

### Billing Contact

Payment information is stored with Billing Contacts, which are associated with Companies, in the fortrabbit Dashboard, and thus can be deleted along with the Company by the client.

### Invoices

Invoices, including the receiver's name, postal address and e-mail, are kept for 10 years in accordance with German tax laws.

## Support chat

Client support communications between fortrabbit and our clients is deleted when an a Account is deleted.

## App data

Apps are containers where clients can store various types of data including files, databases and a Git repository. Apps can also be deleted by clients through the fortrabbit Dashboard. All App-associated data is deleted shortly after the App is deleted from the Dashboard.

## Logs

You can interact with fortrabbit services on various transport protocols. We store connection data in log files with each access. This may include the request time, the IP address of the client, protocol details, URL called, response status, the number of bytes transferred, a referrer-url and the web user-agent (browser and OS). We are doing so for security reasons — to avoid malicious and unauthorized access. We reserve the right to analyze and block certain IPs from our services based on these access logs. Certain log parts might kept for analysis and fraud protection. In any event, we do not store client IP addresses or access data for more than 15 days.

### System level logs

System level logs, such as SSH access and connection logs are securely stored in our infrastructure and are not accessible to clients. They are maintained by fortrabbit for security reasons. Such logs are not accessible to clients and are retained for as long as required. They may contain IP addresses or App names used by clients or website visitors.

### App level logs

Application logs are secured behind key-based or password-based SSH access so that only clients have access to individual logs. These log files can not be edited by clients. They are retained with the App, so if the App gets removed these logs will be removed as well. We do not impose specific life-time limitations or these logs. We do not control or remove any log files that the App creates by itself.

#### Web access logs

The web server access logs contain IP addresses of the visitors to the Apps.

#### PHP error logs

The PHP error logs contain information on runtime exceptions, allowing developers to debug their application code.

## Backups

Backups (if booked) for active Apps have a schedule and a retention period as stated with the documentation of the backups. 5 days after App deletion the last remaining backups will get deleted as well. This extra retention feature allows to recover recently-deleted Apps (with backups enabled) in case of mistakes.

## Additional emergency snapshots

Daily emergency backup snapshots are created for all Apps. For Universal Apps they contain all files on the web storage and the database. For Professional Apps they contain only the database. They have a 15 days retention period. These extra backups are meant for emergency cases only and are not accessible to clients. Once an App is deleted these snapshots will fade out with the retention period; after that all traces of an App are gone.

The contents of the document root (PHP files, image assets) or "web space" may be stored in an encrypted snapshot for up to 20 days after an App is deleted.

## Data disclosure

We do not disclose client data to third parties unless legally obligated to do so.

## Sub-processor data sharing

Please visit our [sub-processors page](https://www.fortrabbit.com/sub-processors) to learn more about the data shared with third-party vendors.

## Data breach notification

We have internal procedures in place to deal with data breaches on our side. Once a data breach notification is ready and approved internally, we will inform affected clients - as soon as possible and with as much detail as possible.

## Data subject access

You as an individual can request us to disclose if and what kind of data we have stored on you personally and for what reason. Please visit our [DSAR page](https://www.fortrabbit.com/dsar) for this.
