# Sub-processors of fortrabbit

last modified: 1st of April 2019.

## Cloud hosting & data centers

The fortrabbit platform runs on **Amazon Web Services**, (AWS). That includes our web properties (www, blog, help and dashboard) and most importantly the Apps our clients are creating here. Various different services from AWS (EC2, RDS, S3, Route53, Cloudfront …) are used in combination.

*  Apps will be stored in the data center location you are choosing.
*  Billing related and Account data is stored in Ireland.

## Payment processing

Credit card billing information are getting stored with our credit card payment processor **Wirecard** directly. We only keep a minimum of information: a reference and an identifier. SEPA bank account information are stored with our databases.

## Usage statistics

We are making use of **Matomo** to analyze traffic and help us to improve your user experience. Your IP address and cookies are stored on your browser. This data is only processed by us.

## Marketing & tracking

We potentially might use **Google AdWords** for re-marketing, as it is an effective way to stay on the radar of potential clients (currently disabled). We might also advertise on **Twitter** in a similar way, for this we are sharing about your visit, think "Tailored Audiences" (currently disabled). 

## Client communication

In order to help you successfully deploy and manage your applications here, we need to be able to communicate with you. In most cases we will chat or have contact by e-mail.

### Support service

The little chat bubble on the bottom right is powered by **Intercom**. This service collects some meta-data, like browser, operating system and geo location when you interact and provide your name and e-mail to get in touch with us. For identified Accounts we share your name, company, e-mail and the additional meta-data via API. This helps us giving you a personal and fast support. In general the support channel is chat, but it is not limited to that. The help desk is also employed when you write an e-mail to "support@fortrabbit.com" and possibly other addresses. Sometimes our answers in the support desk might be delivered by e-mail to make sure they'll reach you. When you delete your Account with fortrabbit, the connected data-set will also get deleted.

### Product information subscription

We are using **MailChimp** to send occasionally e-mail updates to subscribed Accounts. These e-mails include relevant information on service updates and feature announcements, so these are not Newsletter in classical sense. With MailChimp we share e-mail addresses and names (for personalization). New fortrabbit Accounts get signed up for the newsletter automatically. That's why you need to confirm that we contact you by e-mail upfront. Each newsletter — of course — includes a one-click opt-out option. Additionally, there is a Account notification setting with the Dashboard to manage subscriptions. We will write from "pleasereply@fortrabbit.com".

### Transactional e-mails

We are using **Postmark** to send automated transactional e-mails to Accounts. These e-mails include relevant information. They are either triggered by intervals or user interaction. Examples are: "double opt-in sign-up", "invoice notice", "trial expire notice" or "password reset". Naturally, there is no opt-out for these. Again, that's why you need to confirm that to be contacted by e-mail when signing up. We will write from "pleasereply@fortrabbit.com".

## Status updates

Accounts can subscribe — via opt-in — to fortrabbit service status updates for downtimes and incidents. This optional service is provided by **Statuspage** from Atlassian. It is possible to subscribe by e-mail, SMS or RSS feed. It is available under [status.fortrabbit.com](http://status.fortrabbit.com).

## Recruitment software

We are using a software to manage our hiring processes, to evaluate and track applicants. Currently we are using **Recruitee** for this. Open positions can be found under [fortrabbit1.recruitee.com](https://fortrabbit1.recruitee.com).

## Account meta data

We will store additional meta data with your Account when you signup. This includes your IP, the time and a possible referrer. We use **MaxMind** to convert the IP to a geo-location that will also be stored with your Account. This might sound sneaky but is an important corner stone in fraud and phishing protection.

## Internal case management

We use **Trello** as an internal ticketing system to keep track of ongoing business tasks. We might link client cases fron the chat system or billing related information there as well.

## Account profile pictures

We are sending a hash of your e-mail address to the **Gravatar** service to see if you have an Account over there. When you have, we are displaying your profile picture from over there, when not a unique generic profile icon will be displayed.

## Accounting

We are employing a tax agency called **Ecovis**, as well as potentially other accountants to helps us with financial accounting. Naturally, these service providers have reading access to billing related data and invoices. Billing related data, like invoices, are stored with **Google Drive**.

## Embedded content

In certain cases we might embed content from other web services in our websites. This can be a hotlink, some JS, or an iframe. Examples are a **YouTube** video, or a poll by **Google forms** or just an image from another website. Of course, this might refer your IP and a timestamp as well.

## Content Delivery Network

We use a CDN to serve static assets (JS,CSS) on all of the fortrabbit websites (www, blog, help, dashboard). The CDN helps us to deliver those files fast, from your nearest location. The CDN URL is "static.frbit.name". Currently we are using **KeyCDN** services for this. When your browser sends the requests to those files, your IP address will be transmitted.

## Disclaimer

To err is human. We do our best to keep this page up-to-date, complete and correct. We reserve the right to add, change or remove certain services and practices without further announcement.