---
title: AI tool usage and editorial process
created: 2026-01-26
reviewed: 2026-05-13 17:24:00
reviewer: fl
navigation.excerpt: How we use AI.
lead: This policy governs the ethical, secure, and lawful use of AI tools at fortrabbit. It applies to all employees, contractors, and affiliated parties.
links:
  - title: GitHub link
    route: https://github.com/fortrabbit/legal/blob/main/ai-usage-policy.md
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

## AI usage with coding

Use artificial intelligence for coding tasks, but stay in control. Suggested usage:

- Prototype features
- Create tests
- Additional PR review
- Code non-critical features

## AI usage with content creation

Use AI to help draft public-facing articles and posts, but keep it human. All markdown pages on www, docs and blog must carry an AI disclaimer that declares how much AI was used to produce the content.

## Client data

We avoid sharing client data with AI tools wherever possible. When unavoidable, sensitive fields are removed first.

### Who writes

Public-facing prose on fortrabbit.com, docs.fortrabbit.com, and blog.fortrabbit.com is written by the people on our team page plus a small set of declared external contributors. Bylines on blog posts attribute the named author; technical articles and comparison pages attribute the team member who reviewed and signed off on the content, this may surface as the `reviewer` field in frontmatter.

### How review works

Every public article may carry two dates in its frontmatter:

- `created` — when the page was first published
- `reviewed` — the last time a fortrabbit team member read it and confirmed it

We treat `reviewed` as the canonical "still accurate as of" stamp. The `reviewer` field records which team member signed off on the most recent review.

Older pages display a warning when they have not been reviewed for some time. Some articles — such as old blog posts or legacy install guides — will not receive further review.

### Technical content checks

Docs, specs and platform announcements receive a separate technical review on a best-effort basis. Coverage is not guaranteed for every page: high-traffic and platform-critical articles are reviewed more frequently than older or peripheral ones.

### What each `ai` value means

Every article footer carries an `ai` disclosure with one of four values, declared in the article's frontmatter:

- **`none`** — Written and edited entirely by humans. No AI involvement.
- **`grammar`** — Written by a human; AI tools used for grammar, typo, and tone passes only.
- **`co-authored`** — Outline, structure, or substantive paragraphs produced collaboratively with an AI tool. Human edited and verified throughout.
- **`authored`** — Drafted by an AI tool from a prompt or outline, then reviewed, edited, and verified by a team member before publication.

In every case a human reviewed before publishing.

### Flagging inaccuracies

If something looks wrong, outdated, or misleading:

- Open a PR or issue via the **Edit on GitHub** link in any article footer
- Or mail [support@fortrabbit.com](mailto:support@fortrabbit.com)

We treat reader-flagged inaccuracies as priority items.

## Compliance

All AI use must comply with relevant laws, regulations, data protection laws, intellectual property rights, and industry standards. Violations must be reported and may result in disciplinary action up to and including termination.
