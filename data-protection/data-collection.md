---
title: Data collection and retention
description: 'Which data fortrabbit stores during hosting operations, how long each type is kept, and what customers can erase for themselves.'
navigation.excerpt: What kind of data is stored and when it will get deleted.
lead: What kind of data is kept? When is data deleted? Our aim is to store only the minimum data required and to delete as much as possible whenever possible.
reviewed: 2026-09-23
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/data-protection/data-collection.md
---

fortrabbit stores various types of data during hosting operations to perform relevant business functions. For some of this data fortrabbit clients have full control about erasure, other data needs to be kept for a longer period. Retention periods depend on the different types of data stored.

If a law enforcement request, legal obligation or business need requires it, data may be retained longer than the original purpose as described here.

## Dashboard data

The data stored in our client database is only accessible for individual clients protected by username/password login.

### Account

Client account data containing information on name, e-mail, geo location, usage and more is retained for as long as the account is active. Clients can erase associated data by deleting their account with the fortrabbit dashboard. fortrabbit may keep anonymized hints on pre-existing Accounts to keep track of historic events. Accounts are deleted automatically when the e-mail address is not verified within 14 days, when onboarding is not finished 17 days after signup, or 12 months after an account was marked idle because it has no team, payment method or app access. Idle accounts receive a warning e-mail one week before deletion.

If an account was created after an ad click or a campaign link, the click ID, the campaign parameters and the signup button used are stored with it. Every account also records how it was created: directly, through an invitation to a team, to an app, as a client or for billing, or by import from the previous platform. These fields are kept as long as the account exists. For accounts with a click ID, conversion data is sent to Google, see [section 10 of the privacy statement](privacy-statement). The record of those uploads is deleted after 90 days and with the account.

### Teams

In the fortrabbit dashboard, there are teams, consisting of team members. They can also be deleted directly with the fortrabbit dashboard.

### Payment methods

Payment information is stored with payment methods, which are associated with apps and accounts, in the fortrabbit dashboard, and thus can be deleted by our customers.

### Invoices

Invoices, including the receiver's name, postal address and e-mail, are kept for 10 years in accordance with German tax laws.

## Support chat

Client support communications between fortrabbit and our clients is deleted when an a account is deleted.

## App data

Apps are containers where clients can store various types of data including files, databases and a Git repository. Apps can also be deleted by clients through the fortrabbit Dashboard. All App-associated data is deleted shortly after the App is deleted from the Dashboard.

## Logs

You can interact with fortrabbit services on various transport protocols. We store connection data in log files with each access. This may include the request time, the IP address of the client, protocol details, URL called, response status, the number of bytes transferred, a referrer-url and the web user-agent (browser and OS). We are doing so for security reasons — to avoid malicious and unauthorized access. We reserve the right to analyze and block certain IPs from our services based on these access logs. Certain log parts might kept for analysis and fraud protection. In any event, we do not store client IP addresses or access data for more than 30 days.

### System level logs

System level logs, such as SSH access and connection logs are securely stored in our infrastructure and are not accessible to clients. They are maintained by fortrabbit for security reasons. Such logs are not accessible to clients and are retained for no more than 30 days. They may contain IP addresses or App names used by clients or website visitors.

### App level logs

Application logs are secured behind key-based or password-based SSH access so that only clients have access to individual logs. These log files can not be edited by clients. They are retained with the App, so if the App gets removed these logs will be removed as well. We do not impose specific life-time limitations or these logs. We do not control or remove any log files that the App creates by itself.

#### Web access logs

The web server access logs contain IP addresses of the visitors to the Apps.

#### PHP error logs

The PHP error logs contain information on runtime exceptions, allowing developers to debug their application code.

## Backups

Backups (if booked) for active Apps have a schedule and a retention period as stated with the documentation of the backups. Remaining backups are deleted within an hour after the environment is deleted.

## Additional emergency snapshots

We may keep internal snapshots of environments for disaster recovery on a best-effort basis. There is no guarantee that a snapshot exists. Snapshots are not accessible to clients and are kept for no more than 30 days.

## Data disclosure

We do not disclose client data to third parties unless legally obligated to do so. The exception is the ad conversion data described in [section 10 of the privacy statement](privacy-statement).

## Sub-processor data sharing

Please visit our [sub-processors page](sub-processors) to learn more about the data shared with third-party vendors.

## Data breach notification

We have internal procedures in place to deal with data breaches on our side. Once a data breach notification is ready and approved internally, we will inform affected clients - as soon as possible and with as much detail as possible.

## Data subject access

You as an individual can request us to disclose if and what kind of data we have stored on you personally and for what reason. Please visit our [DSAR page](dsar-policy) for more details.
