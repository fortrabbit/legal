# Security measures of fortrabbit

last modified: 5th of August 2021

**It's our duty to keep the infrastructure secure.** While we don't like to expose too much detail — as secrecy is part of security — the following technical and organizational measures may give you some confidence:

## Service scope

fortrabbit provides a hosting self-service, granting clients access to technical systems to store and process code via PHP. Clients can store data on a file system and in databases. Think of fortrabbit as a meta-hosting service, or something like a middleware.

## Data centers

fortrabbit's physical infrastructure is hosted and managed within Amazon's secure data centers on Amazon Web Service (AWS) technology. These data centers are certified under a number of security standards, including:

* ISO 27001
* SOC 1 and SOC 2/SSAE 16/ISAE 3402
* PCI Level 1
* FISMA Moderate
* Sarbanes-Oxley (SOX)

AWS enforces a high level of physical security to safeguard their data center with military grade perimeter controls and security staff at all points of ingress. As for environmental protection, AWS has sophisticated fire detection and suppression equipment, fully redundant power infrastructure with integrated UPS units and high-end climate control systems to guarantee an optimal working environment for the hardware. For a more in-depth view, we refer you to the [AWS Security Center](https://aws.amazon.com/security).

## SysOps

A multi-tier security strategy is employed. On the inside, each Node is built around a hardened Linux kernel, which enforces strong privilege and resource separation mechanisms at OS level. All operating systems and software components are kept up-to-date.

At the next tier, each Node exists within isolated virtual containers, which guarantee complete logical separation of Apps. Each App runs within its own isolated environment and cannot interact with other applications or areas of the system. In addition, the container technology allows hard resource capping, which reduces the bad neighbor effect of shared environments to a bare minimum. The setup is designed in a flexible manner to isolate or boost resources quickly.

## Penetration testing

Third party security testing is performed by independent security researchers at irregular intervals. Findings from each vulnerability assessment are reviewed with the assessors, risk ranked and resolved swiftly.

## Abuse monitoring

User and system activity is monitored for signs of abuse — by algorithms and humans.

## Firewalling

On the outside, network firewalling and hardened TCP/IP stacks to mitigate resource exhaustion attempts are utilized. Sniffing and spoofing attacks are prevented through the underlying infrastructure.

By default all outgoing traffic on all ports, except for [standard ones](https://www.fortrabbit.com/specs#firewall), is blocked. Clients can request to whitelist a port range.

## Dashboard

All communication with the Dashboard is encrypted via TLS. By default users are going to get logged out after some time of inactivity. For "dangerous actions" re-authentication is required. 2FA is available.

## Credit card security

A PCI Level 1 compliant provider for processing credit card payments is used. Security policy reviews are executed on a regular basis.

## Internal protocols

All employees are trained in safety aspects and best security practices, including how to identify social engineering, phishing scams, and hackers. All employees agree to privacy safeguard policies outlining their responsibility in protecting client data.

Binding internal security policies that are evaluated on a regular basis are in place. It is regularly checked whether all responsibilities have been clearly assigned and that they are practicable. There are documented rules and contingency plans.

The computer systems of employees are secured by encrypted file systems and password authentication.

## Access control

All server accesses are equipped with individual minimum rights and are transmitted in encrypted form. SSH access for clients is "jailed" with outbreak prevention. Access by the contractor's employees will only be via key-pair authentication and where possible through multi-factor authentication. All connections to the server are via encrypted channels and protocols.

## Cryptography

All sensible access data is stored "hashed + salted". Asymmetric encryption and AES (Advanced Encryption Standard) encryption are used.

## Supplier relationships

All subcontractors are tested for privacy and security suitability. There are appropriate terms in place.
