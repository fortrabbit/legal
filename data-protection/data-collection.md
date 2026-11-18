---
title: Data collection and retention
description: 'Which data fortrabbit stores during hosting operations, how long each type is kept, and what customers can erase for themselves.'
navigation.excerpt: What kind of data is stored and when it will get deleted.
lead: What kind of data is kept? When is data deleted? We aim to balance privacy, security, observability and convenience.
created: 2021-08-05
updated: 2026-11-18
reviewed: 2026-11-18
ai: co-authored
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/data-protection/data-collection.md
---

fortrabbit stores various types of data during hosting operations to perform relevant business functions. For some of this data fortrabbit customers have full control over erasure, other data needs to be kept for a longer period. Retention periods depend on the different types of data stored.

If a law enforcement request, legal obligation or business need requires it, data may be retained longer than the original purpose as described here.

## Object definitions

- [Person](https://docs.fortrabbit.com/platform/objects/person): one human with a personal account, their personal access to fortrabbit with name, e-mail, login and SSH keys.
- [Team](https://docs.fortrabbit.com/platform/objects/team): groups the people who work on apps together.
- [Payment method](https://docs.fortrabbit.com/platform/objects/payment-method): stands for the party that pays.
- [App](https://docs.fortrabbit.com/platform/objects/app): one project, holds one or more environments.
- [Environment](https://docs.fortrabbit.com/platform/objects/environment): one running copy of an app, such as production or staging, with its own settings, data and Git branch.
- Customer: the party to the contract with fortrabbit.
- User or visitor: anyone using the fortrabbit websites, with or without a personal account, fortrabbit staff included.

### Old platform

The old platform uses other names for similar objects. These documents cover both platforms, read the names like this:

| Old platform    | New platform             |
| --------------- | ------------------------ |
| Account         | personal account         |
| Company         | team, roughly            |
| Billing contact | payment method           |
| App             | app with one environment |

## Dashboard data

The data in our customer database is accessible to each customer after signing in to the dashboard, and to fortrabbit staff.

### Personal account

Personal account data containing information on name, e-mail, geo location, usage and more is retained for as long as the account is active. Customers can erase associated data by deleting their account with the fortrabbit dashboard, except for invoices and the records described under "Deleted objects" and "Events". Accounts are deleted automatically when the e-mail address is not verified within 14 days, when onboarding is not finished 17 days after signup, or 12 months after an account was marked idle because it has no team, payment method or app access. Idle accounts receive a warning e-mail one week before deletion.

If an account was created after an ad click or a campaign link, the click ID, the campaign parameters and the signup button used are stored with it. Every account also records how it was created: directly, through an invitation to a team, to an app, as a client or for billing, or by import from the previous platform. These fields are kept as long as the account exists. For accounts with a click ID, conversion data is sent to Google, see [section 10 of the privacy statement](privacy-statement). The record of those uploads is deleted after 90 days and with the account.

### Teams

In the fortrabbit dashboard, there are teams, consisting of team members. They can also be deleted directly with the fortrabbit dashboard.

### Payment methods

Payment information is stored with payment methods, which are associated with apps and accounts, in the fortrabbit dashboard, and thus can be deleted by our customers.

### Invoices

Invoices, including the receiver's name, postal address and e-mail, are kept for 10 years in accordance with German tax laws.

Customers see and download their invoices in the dashboard as long as the payment method exists. When the payment method or the personal account is deleted, the invoices are no longer accessible in the dashboard, but fortrabbit keeps them for the full 10 years.

### Deleted objects

When an app, environment, domain, SSH key, team, personal account or payment method is deleted, fortrabbit keeps a record of it: type, ID, name, creation and deletion date, who deleted it, and the people who had access at that time. For a personal account, the record holds the person's name. For an SSH key, it holds the key's name.

These records help to detect fraud, such as a blocked account that comes back with the same name or SSH key, and they let customers look up what happened in the past. People who had access to a deleted object, former team members included, can see its record. fortrabbit staff see all records.

Records of deleted objects are deleted after 10 years.

### Events

fortrabbit records actions on apps, environments, teams, personal accounts and payment methods as events: who did what and when, from which IP address, through which channel, such as dashboard, API or MCP, and the old and new value of a change. Events keep the names of the people and objects involved, also after these are deleted.

Events serve security, fraud prevention and a traceable history. Each person sees their own events and the events of shared objects, such as apps, teams and payment methods. fortrabbit staff see all events.

Events are deleted after 10 years.

## Support chat

Customer support communications between fortrabbit and our customers are deleted when an account is deleted.

## App data

Environments are where customers store files and databases. Apps and environments can be deleted by customers in the dashboard. All associated data is deleted shortly after the app or environment is deleted.

## Logs

You can interact with fortrabbit services on various transport protocols. We store connection data in log files with each access. This may include the request time, the IP address of the client, protocol details, URL called, response status, the number of bytes transferred, a referrer-url and the web user-agent (browser and OS). We are doing so for security reasons — to avoid malicious and unauthorized access. We reserve the right to analyze and block certain IPs from our services based on these access logs. Certain log parts might be kept for analysis and fraud protection. Log files with IP addresses and access data are deleted after 30 days at the latest. Events keep the IP address as described under "Events".

### System level logs

System level logs, such as SSH access and connection logs are securely stored in our infrastructure and are not accessible to customers. They are maintained by fortrabbit for security reasons. Such logs are not accessible to customers and are retained for no more than 30 days. They may contain IP addresses or app names used by customers or website visitors.

### App level logs

Application logs are secured behind SSH access so that only customers can read them. These log files can not be edited by customers. They are retained with the app, so if the app gets removed these logs will be removed as well. We do not impose specific lifetime limits on these logs. We do not control or remove any log files that the app creates by itself.

#### Web access logs

The web server access logs contain IP addresses of the visitors to the apps.

#### PHP error logs

The PHP error logs contain information on runtime exceptions, allowing developers to debug their application code.

## Backups

Backups of every environment have a schedule and a retention period as stated in the backups documentation. Remaining backups are deleted shortly after the environment is deleted.

## Data disclosure

We share customer data with as few parties as possible, and only as much as each of them needs. Sub-processors, such as Intercom for the support chat and Postmark for e-mails, receive data to run the service, on the legal bases named in the [privacy statement](privacy-statement). Ad conversion data goes to Google, see [section 10 of the privacy statement](privacy-statement). Beyond that, we disclose customer data to third parties only when legally obligated to do so, or to report suspected illegal activity as described in the [acceptable use policy](/legal/policies/acceptable-use).

## Sub-processor data sharing

Please visit our [sub-processors page](sub-processors) to learn more about the data shared with third-party vendors.

## Data breach notification

We have internal procedures in place to deal with data breaches on our side. Once a data breach notification is ready and approved internally, we will inform affected customers as soon as possible and with as much detail as possible. For personal data processed on behalf of customers, we notify within 24 hours, see section 9 of the [data processing agreement](data-processing).

## Data subject access

You as an individual can request us to disclose if and what kind of data we have stored on you personally and for what reason. Please visit our [DSAR page](dsar-policy) for more details.
