---
title: AI tool usage and editorial process
description: 'How fortrabbit uses AI in the product and in its own work, what stays human-reviewed, and how AI involvement is disclosed on each page.'
created: 2026-01-26
updated: 2026-11-18
reviewed: 2026-09-13
reviewer: fl
ai: co-authored
navigation.excerpt: How we use AI.
lead: This policy governs the ethical, secure, and lawful use of AI tools at fortrabbit. It applies to all employees, contractors, and affiliated parties.
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/policies/ai-usage-policy.md
---

## Required

- Use only reputable AI tools
- Evaluate security of AI tools before use
- Maintain confidentiality and integrity of data and code
- Apply standard security practices
- Protect confidential data

## Prohibited

- Unauthorized data access or handling
- Creating or distributing fraudulent or misleading content
- Manipulating AI outputs to obscure facts
- Sharing data externally without authorization

## Customer data

We avoid sharing customer data with AI tools where it is not needed. To help with a support case or a ticket, an AI tool may read the conversation or ticket content. The AI providers in use are listed on the [sub-processors page](/legal/data-protection/sub-processors).

## AI usage with coding

AI agents write a large share of fortrabbit's code: features, fixes, tests, migrations and reviews. A team member directs each task and is responsible for the result. Automated tests and AI code review check the changes.

## AI in the product

fortrabbit offers an MCP server, the frbit CLI and agent skills, so customers can manage apps and environments with their own AI agents. An agent acts with the permissions of the person who connected it, and the person can revoke the connection at any time in the dashboard.

## AI usage with content creation

AI helps write public-facing articles and posts, from grammar passes to full drafts. A team member reviews every page before publication. All markdown pages on www, docs and blog carry an AI disclosure that declares how much AI was used, see "What each `ai` value means".

## Who writes

Public-facing prose on fortrabbit.com, docs.fortrabbit.com, and blog.fortrabbit.com is written by the people on our team page plus a small set of declared external contributors. Bylines on blog posts attribute the named author; technical articles and comparison pages attribute the team member who reviewed and signed off on the content, this may surface as the `reviewer` field in frontmatter.

## What each `ai` value means

Every article footer carries an `ai` disclosure with one of four values, declared in the article's frontmatter:

- **`none`** — Written and edited entirely by humans. No AI involvement.
- **`grammar`** — Written by a human; AI tools used for grammar, typo, and tone passes only.
- **`co-authored`** — Outline, structure, or substantive paragraphs produced collaboratively with an AI tool. Human edited and verified throughout.
- **`authored`** — Drafted by an AI tool from a prompt or outline, then reviewed, edited, and verified by a team member before publication.

In every case a human reviewed before publishing.

## How review works

Every public article may carry two dates in its frontmatter:

- `created` — when the page was first published
- `reviewed` — the last time a fortrabbit team member read it and confirmed it

We treat `reviewed` as the canonical "still accurate as of" stamp. The `reviewer` field records which team member signed off on the most recent review.

Older pages display a warning when they have not been reviewed for some time. Some articles — such as old blog posts or legacy install guides — will not receive further review.

## Technical content checks

Docs, specs and platform announcements receive a separate technical review on a best-effort basis. Coverage is not guaranteed for every page: high-traffic and platform-critical articles are reviewed more frequently than older or peripheral ones.

## Flagging inaccuracies

If something looks wrong, outdated, or misleading:

- Open a PR or issue via the **Edit on GitHub** link in any article footer
- Or mail [support@fortrabbit.com](mailto:support@fortrabbit.com)

We treat reader-flagged inaccuracies as priority items.

## Compliance

All AI use must comply with relevant laws, regulations, data protection laws, intellectual property rights, and industry standards. Violations must be reported and may result in disciplinary action up to and including termination.
