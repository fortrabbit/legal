---
title: Stress testing policies
lead: You want to run a test to check if this works as advertised and whether it's secure?
reviewed: 2025-11-14 15:22:37
showGithub: true
---

We understand the need to ensure integrity and compliance. Some tests might have adverse impacts on other clients, so we only permit certain types and within certain bounds. Please review this page carefully before getting started.

## Penetration testing and security scans

Feel free to perform standard penetration tests and security scans as often as required. Approval from fortrabbit is not required.

## Load testing

Please don't run Denial of Service tests and any other type of testing which results in heavy network load. Before running any load test, make sure to have a swift PHP response time for your App already - 200 ms or less.

Please respect the following rate limit:

* Max 300 RPM

Also mind the general platform limits. Each App is different in the way it's built and in the way it is consumed. There are highly dynamic, compute-intensive Apps, and there are Apps that are mostly static. Some have many assets, some none. Some have only one page, some have thousands of pages. You as the developer should know your project, the way it is built and how it will be used. Follow best practices. Get insights from a plugin like Blackfire.
