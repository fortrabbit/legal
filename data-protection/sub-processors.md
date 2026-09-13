---
title: Sub-processors
description: 'Every third-party service fortrabbit uses, what it processes and why. Sub-processors are assessed for security and GDPR, with DPAs in place.'
seo:
  title: Sub-processors and third-party services
reviewed: 2026-04-16 15:39:32
navigation.excerpt: Which 3rd party services we use and why.
lead: fortrabbit wouldn't be possible without relying on third party services. We have carefully reviewed and chosen our business partners. We have mapped all data we share with third party providers, the kind of data collected and to which geographical destinations it is transferred.
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/data-protection/sub-processors.md
---

All of our sub-processors have been assessed for security and GDPR compliance. Enacted contract amendments and Data Processing Agreements (DPAs) are in place where applicable. The following third party services transparency report gives you an overview which external services we use, how and why.

## Infrastructure & data centers

The fortrabbit platform runs on **Amazon Web Services** (AWS). That includes our websites (www, docs, blog and dash) and the apps our clients create here. Various different services from AWS (EC2, RDS, S3, Route53, Cloudfront, etc) are used in combination. See [AWS Service Terms](https://aws.amazon.com/service-terms).

- Apps will be stored in the data center location you choose.
- Billing related and Account data is stored in Ireland.

## Payment processing

Credit card billing information is stored with our credit card payment processor **Stripe** directly. In addition we also provide Stripe with your zip code to ensure correct authorization. Stripe might also store your IP and user agent data collected from your browser. We only keep a minimum of information on our side: a reference and an identifier. SEPA bank account information is stored with our databases. Terms available on request.

## Usage and performance statistics

We use a tool to see track visits called **Fathom**. This covers all web properties and is configured cookie-less.

We use **New Relic** to monitor errors and performance of our backend. Error reports may contain request data. New Relic is not loaded on the websites and sets no cookies.

## Advertising

We run a **Google Ads** remarketing tag on our marketing website [www.fortrabbit.com](https://www.fortrabbit.com), and on none of our other web properties. The tag is loaded only for visitors in jurisdictions that do not require opt-in consent for advertising cookies, and it is not loaded when the browser sends a Global Privacy Control signal. Google receives the fact that a browser opened a page here, together with the IP address and user agent that request carries, and uses it to show fortrabbit ads to the same browser on other websites. No account, billing or app data is shared. See the [Google Ads Data Processing Terms](https://business.safety.google/adsprocessorterms) and [how Google uses data from sites that use its services](https://policies.google.com/technologies/partner-sites). Opt-out routes are listed on our [privacy page](/benefits/privacy).

## Client communication

In order to help you successfully deploy and manage your applications here, we need to be able to communicate with you. In most cases we will use chat or contact you by e-mail.

### Support service

Our support chat is powered by **Intercom**. This service collects some meta-data, like browser, operating system and geo-location when you interact and provide your name and e-mail to get in touch with us. For logged-in accounts, the name, e-mail address and an account ID are shared via API. This helps us giving you a personal and fast support. In general the support channel is chat, but it is not limited to that. The help desk is also employed when you write an e-mail to "<support@fortrabbit.com>" and possibly other addresses. Sometimes our answers in the support desk might be delivered by e-mail to make sure they'll reach you. When you delete your account with fortrabbit, the connected data-set will also get deleted. Intercom analyzes your usage using cookies to "improve service" and "enhance user experience". They collect publicly available contact and social information and share it with their partners. For more info on privacy practices, visit the [Intercom Privacy](https://www.intercom.com/terms-and-policies#privacy) and see the [Intercom Terms](https://www.intercom.com/terms-and-policies#terms).

### Product information subscription

We may use **MailChimp** to send occasional e-mail updates on service changes and feature announcements. For this, e-mail addresses and names are exported to MailChimp. Each of these e-mails includes a one-click opt-out. We write from "<pleasereply@fortrabbit.com>". See [MailChimp Terms](https://mailchimp.com/legal/terms).

### Personal e-mails

We are required by law to store all business communication for ten years. So we will save your e-mails, when you contacts us by e-mail. Our personal mail (MX) accounts are by **Google** (gSuite). See [gSuite Terms](https://gsuite.google.com/terms/standard_terms_checkout.html).

### Transactional e-mails

We use **Postmark** to send automated transactional e-mails to Accounts. These e-mails include relevant information. They are either triggered by intervals or user interaction. Examples are: "double opt-in sign-up", "invoice notice", "trial expire notice" or "password reset". Naturally, there is no opt-out for these. Again, that's why you need to confirm that you are willing to be contacted by e-mail when signing up. We will write from "<pleasereply@fortrabbit.com>". See [Postmark Terms](https://postmarkapp.com/terms-of-service).

## Status updates

Downtimes and incidents are published on [status.fortrabbit.com](https://status.fortrabbit.com), a status page provided by **Better Stack**. The status indicator on the fortrabbit websites loads its data from Better Stack, which receives the visitor's IP address with that request. See the [Better Stack privacy policy](https://betterstack.com/privacy).

## Recruitment software

We use may use 3rd party software to manage our hiring processes, to evaluate and track applicants. If you apply for a job here, consider the privacy from the 3rd party provider.

## Account meta data

At signup, the IP address is sent to **MaxMind**, which returns a geo-location (country, region, city). The geo-location and the signup time are stored with the account, the IP address is not. This helps against fraudulent signups and phishing.

## Internal case management

We use **Linear** as an internal ticketing system to keep track of ongoing business tasks. We might link client cases from the chat system or other details such as app names there as well. See [Linear privacy](https://linear.app/privacy).

## Account profile pictures

Accounts that sign in with **GitHub**, **GitLab** or **Google** receive name, e-mail address and profile picture from that provider. The profile picture is shown in the dashboard. Pictures of fortrabbit team members on the websites are loaded from **Gravatar**, which receives the visitor's IP address. No customer e-mail hashes are sent to Gravatar.

## Accounting

We employ a tax agency called **Ecovis**, as well as potentially other accountants to help us with financial accounting. Naturally, these service providers have reading access to billing related data and invoices. Billing related data, like invoices, are stored with **Google Drive** (Google Apps for Business).

## Embedded content

In certain cases we might embed content from other web services in our websites. This can be a hotlink, some JS, or an iframe. Examples are a **YouTube** video, or a poll by **Google forms** or just an image from another website. Of course, this might contain your IP and a timestamp as well.

## Content Delivery Network

The websites of the current platform serve their static assets themselves, without a third-party CDN.

## Website screenshots

The dashboard shows screenshots of client apps. They are created by **Urlbox**, which periodically loads the default domain of an environment.

## Knowledge base

We document internal standard procedures in a knowledge base. In some cases it references client data, such as extra settings or individual agreements. The knowledge base is a private Git repository hosted on **GitHub**. A former knowledge base on **Notion** is no longer in use, but still holds documents that may reference client data until it is deleted. See the [Notion Terms & Privacy](https://www.notion.so/Terms-and-Privacy-28ffdd083dc3473e9c2da6ec011b58ac).

## Code hosting

Your Git code base is hosted on **GitHub**. We connect to through our fortrabbit GitHub app.

## FOSS

In addition to all the useful commercial services listed above, fortrabbit would not be possible without free and open-source software. We make use of thousands of different open-source software packages.

## Disclaimer

To err is human. We do our best to keep this page up-to-date, complete and correct. We reserve the right to add, change or remove certain services and practices without further announcement.
