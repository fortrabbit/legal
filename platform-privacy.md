# Platform privacy rules

last modified: 4th of August 2021

TODO:

* [ ] Merge topics into other sections and remove this part

The following additional informal ruleset defines usage of our hosting platform.

## Deleting data

When deleting Apps or Accounts with us, we delete as much and as complete as possible. For some clients this comes as an surprise as they expect that we just hide data away, until they pay their open invoices.

## Web server logs

You can interact with fortrabbit services on various transport protocols. We are storing connection data in log files with each access. This may include the request time, the IP address of the requestor, the protocol and version used, URL called, response status, the number of bytes delivered, a referrer and a user agent (browser and OS). We are doing so for security reasons — to avoid malicious and unauthorized access. We reserve the right to analyze and blacklist certain IPs from our services based on these access logs. We will delete those logs as soon as possible. Certain logs might kept for analysis and fraud protection.

## TLS encryption

fortrabbit Apps can be accessed via a TLS encrypted connection in various ways. All have in common that fortrabbit is not the Certificate Authority and that the service is provided "as is". See our [dedicated HTTPS & TLS help article](https://help.fortrabbit.com/https) for more.