# Stress testing

last modified: 5th of August 2021

You want to run a test to check if this works as advertised and if it is secure? We understand the need to ensure integrity and compliance. Some tests might have adverse impacts to other clients, so we only permit certain types within bounds, please review this page carefully before getting started.

## Penetration testing and security scans

Feel free to perform standard penetration tests and security scans as often as required. Approval from fortrabbit is not required.

## Load testing

Please don't run Denial of Service tests and any other type of testing which results in heavy network load. Before running any load test, make sure to have a swift PHP response time for your App already - 200 ms or less.

Please respect the following rate limits: 

* Universal Stack: Max 300 RPM
* Professional Stack: 300 RPM per Node

Also mind the general [platform limits](https://help.fortrabbit.com/limits). Each App is different in the way it's built and in the way it is consumed. There are compute-intensive highly dynamic Apps, there are Apps that are mostly static. Some have many assets, some none. Some have only one page, some have thousands of pages. You as the developer should know your project, the way it is built and how it will be used. Follow best practices, see our [application design article](https://help.fortrabbit.com/app-design). Get insights from a plugin like [Blackfire](https://help.fortrabbit.com/blackfire) or [NewRelic](https://help.fortrabbit.com/new-relic).
