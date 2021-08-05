# Data collection and retention

last modified: 5th of August 2021

What kind of data is kept? When is data getting deleted? Our aim is to store only the minimum data required and to delete as much as possible whenever possible.

fortrabbit stores various types of data during hosting operations to perform relevant business functions. For some of this data fortrabbit clients have full control about erasure, other data needs to be kept for a longer period. Retention periods are depending on the different types of data stored.

If a law enforcement request, legal obligation or business need requires, data may be retained longer than the original purpose as described here.

## Dashboard data

The following data stored with our databases is encrypted and only accessible for individual clients protected by username password login. Two-factor authentication is available.

### Account

Client Account data containing information on name, e-mail, geo location, usage and more is retained for as long as the Account is active. Clients can erase associated data by deleting their Account with the fortrabbit Dashboard. fortrabbit may keep anonymized hints on pre-existing Accounts to keep track of historic events.

### Company

In the fortrabbit Dashboard, there are Companies, they consist of team members and Billing Contacts. They can also be deleted in self service by clients directly with the fortrabbit Dashboard.

### Billing Contact

Details to the payment information are stored with Billing Contacts which are associated with Companies in the fortrabbit Dashboard and thus can be deleted along with the Company in self service.

### Invoices

Invoices including the receivers name, postal address and e-mail are kept for 10 years in accordance with German tax laws. Each invoice has an individual non-guessable hidden but public link for convenience.

### Support chat

Client support communication will get deleted alongside when the Account is deleted, as described above.

## App data

Apps are containers where clients can store various types of data including files, databases and a Git repository. Apps can also be deleted in self service by clients through the fortrabbit Dashboard. All App associated data is getting deleted once the App will be removed from the Dashboard.

## Logs

You can interact with fortrabbit services on various transport protocols. We are storing connection data in log files with each access. This may include the request time, the IP address of the requestor, the protocol and version used, URL called, response status, the number of bytes delivered, a referrer and a user agent (browser and OS). We are doing so for security reasons — to avoid malicious and unauthorized access. We reserve the right to analyze and block certain IPs from our services based on these access logs. We will delete those logs as soon as possible. Certain log parts might kept for analysis and fraud protection.

### System level logs

System level logs, such as SSH access and connection logs are securely stored in our infrastructure and are not accessible to clients. They are maintained by fortrabbit for security reasons. Such logs are not accessible for clients and are retained for at most 1 year depending upon requirements. They may contain IP addresses or App names used by clients or website visitors.

### App level logs

Application logs are secured behind key-based or password-based SSH access so that only clients have access to individual logs. App level logs are rotated with `logrotate` on a daily basis and a cap of 100 MB per uncompressed log file. You will most likely find different available historic logging time frames per type of log file. Log files can not be edited by clients. They are retained with the App, so if the App get's removed these logs will be removed as well.

#### Web access logs

The web server access logs are containing IP addresses of the visitors of the Apps.

#### PHP error logs

The PHP error logs are containing information on runtime exceptions allowing developers to debug bugs in their application code.

## Backups

Backups (if booked) for active Apps have a schedule and a retention period as stated with the documentation of the backups. Some days (period might vary) after App deletion the last remaining backups will get deleted as well. This extra retention feature allows to recover recently-deleted Apps (with backups enabled) in case of mistakes.

## Data disclosure

We do not disclose client data to third parties unless legally obligated such with a law enforcement request.

## Sub-processor data sharing

Please transfer to our [sub-processors page](https://www.fortrabbit.com/sub-processors) to learn more about the data shared with third party vendors.

## Data breach notification

We have internal procedures in place to deal with data breaches on our side. Once a data breach notification is ready and approved internally, we will inform affected affected clients - as soon as possible and with as much detail as possible.

## Data subject access

You as an individual can request us to disclose if and what kind of data we have stored on you personally and for what, please transfer to our [DSAR page](https://www.fortrabbit.com/dsar) for this.