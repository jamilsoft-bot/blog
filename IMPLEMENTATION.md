# Blog Implementation Plan

## Goal

Build a lead-generation-focused personal/professional blog for Muhammad Jamil and Jamilsoft Technologies. The site will publish useful, discoverable content and convert relevant readers into qualified inquiries. The stack is JamilX (PHP) + MySQL for the backend and a client-rendered React application styled with Tailwind CSS. This remains a plan; do not begin application implementation until the owner approves it.

## Confirmed direction

- **Backend framework:** JamilX PHP Framework. Follow its documented Service/Action/Container/Prototype conventions and module structure; do not assume Composer is available.
- **Frontend:** React rendered in the browser, styled with Tailwind CSS.
- **Database:** MySQL.
- **Visual theme:** Blue on white, adapted to the identity of the profile site.
- **Primary purpose:** Attract relevant prospects and generate/track inbound leads.
- **AI provider default:** Groq, called from the PHP backend. Keep provider/model settings configurable; do not put API credentials in the React bundle.

## Branding reference

Use the existing profile site at `https://jamilsoft-bot.github.io/` as the source for branding and factual profile content. Its current page identifies Muhammad Jamil as a systems architect and product builder, founder of Jamilsoft Technologies, and presents product-building, software systems, and AI integration. It links to GitHub (`https://github.com/jamilsoft-bot`), LinkedIn (`https://linkedin.com/in/muhammad-jamil`), and `sales@jamilsoft.com.ng`; it also states Bauchi, Nigeria. Reuse the existing logo/identity assets where suitable, but confirm assets and final copy during implementation rather than inventing additional biography or claims.

## Proposed architecture and JamilX fit

- Use JamilX Services for route-level page/API entry points, Actions for request handling, Prototypes for reusable data/database operations, and Containers for the HTML bootstrap/layout where appropriate.
- Keep React as the browser-side UI. JamilX/PHP serves the application shell, API responses, route-specific metadata, and crawl-related files. React consumes the public content and lead-capture APIs.
- Persist posts, taxonomy, publishing state, lead submissions, and any approved AI interaction records in MySQL. Keep credentials and provider calls on the server.
- Inspect the selected JamilX revision and its existing API, authentication, migration, and database patterns before implementation; this plan does not assume unverified interfaces.

## Product scope

### Public site and publishing

1. Home page that explains what Muhammad Jamil/Jamilsoft does, highlights selected expertise or products, and directs appropriate visitors to contact or inquiry paths.
2. Blog index with pagination, categories/tags, search, and clear content discovery.
3. Article pages with author/date details, related posts, share controls, and relevant calls to action.
4. About, services/solutions (only for offerings confirmed by the owner), and contact pages.
5. Authenticated editorial workflow to draft, edit, preview, publish, and unpublish posts, with server-side authorization.

### Lead generation

- Contextual, non-intrusive calls to action on the home page and relevant articles.
- Inquiry/lead form with only necessary fields, validation, accessible errors, spam controls, and a clear privacy notice/consent where required.
- Store submitted leads in MySQL with submission time, status, and limited source attribution (for example, landing page and UTM campaign parameters when present).
- Provide an authenticated view/export or workflow for reviewing and updating lead status; do not expose lead records publicly.
- Define retention, access permissions, deletion/export handling, and notification behavior before collecting real personal data. Avoid collecting sensitive information unless separately justified and approved.

## SEO and social sharing

- Use stable, readable URLs for articles and taxonomy, canonical URLs, unique titles/descriptions, semantic headings, and internal links.
- Generate sitemap and `robots.txt` from published content; prevent drafts and private/admin pages from indexing.
- Add Article JSON-LD from verified database content and valid publication/author details.
- Add Open Graph and X/Twitter metadata with per-article images and fallbacks, plus accessible share/copy-link controls.
- Optimize image formats/sizes, mobile performance, page weight, and accessibility.
- **Client-rendering constraint:** Pure client-side React rendering can make SEO content and social previews less dependable because some crawlers and share-preview bots do not execute JavaScript. Keep the requested client-side React UI, but have JamilX/PHP emit route-specific title, description, canonical, Open Graph, and Twitter metadata in the initial HTML response, and ensure the HTML has a useful crawlable fallback or server-provided content where feasible. Validate with crawler and social-card tools before launch; if adequate indexing cannot be demonstrated, return to the owner with options rather than silently switching to SSR.

## AI agent integration (Groq default)

- Treat AI as an assistive feature, not an unsupervised decision-maker. Initial candidate workflows: editorial outline/draft assistance and summarizing or categorizing inbound inquiries for a human reviewer. Confirm the exact workflows and what data can be sent to a provider before implementation.
- Route model calls through a backend service/provider adapter. Default configuration uses Groq; allow model/provider changes by server-side configuration. Select and verify the exact Groq model during implementation rather than hard-coding an assumed model in this plan.
- Keep Groq API keys in server-side environment/configuration only. Apply input validation, request size/time limits, rate limits, cost controls, error handling, and audit-safe logging that does not unnecessarily retain prompt contents or personal data.
- Do not send lead personal information to Groq unless the owner explicitly approves the fields, purpose, privacy notice, provider terms, and retention approach. Prefer data minimization/redaction.
- Require human review before AI-generated content is published or an AI-generated lead recommendation is acted on. No autonomous prospect scraping, unsolicited outreach, or sending messages on behalf of the owner is in the initial scope.

## Security, privacy, and operations

- Use JamilX-supported authentication and authorization for admin/editor and lead-management routes; verify CSRF protections for state-changing browser requests.
- Validate and normalize all inputs server-side; use parameterized database operations and output-appropriate escaping.
- Keep secrets out of the repository and frontend assets. Configure HTTPS, least-privilege database credentials, backups, and production error handling.
- Document data collected, purpose, access, retention, AI-provider data flow, and user-facing notice before production lead collection.

## Design direction

- White surfaces with a restrained blue primary palette, consistent with the existing profile identity. Reuse the profile's logo/assets when appropriate.
- Define Tailwind color tokens and check text/control contrast, visible focus, and keyboard navigation.
- Prioritize readable typography, responsive behavior, semantic markup, and reduced-motion support.

## Decisions and checks before implementation

- Confirm exact blog domain and deployment/hosting arrangement.
- Confirm which Jamilsoft products/services and calls to action should be promoted, and approve site copy and social links.
- Confirm lead fields, notification/review workflow, retention, and privacy notice.
- Confirm AI workflows, whether any lead data may be sent to Groq, human-review expectations, and the initial model.
- Confirm publishing/admin roles and whether the existing JamilX authentication facilities fit.
- Verify how JamilX serves the React assets and route-specific initial HTML metadata while preserving client-side rendering.
- Confirm whether newsletter signup, analytics, comments, and automated social posting are excluded from the first release (recommended default: excluded).

## Suggested implementation sequence

1. Review the current JamilX conventions and profile branding assets; resolve the decisions above.
2. Define MySQL content and lead data models, access rules, retention, and migration approach.
3. Build JamilX routes/API and the React + Tailwind public/editorial UI.
4. Implement lead capture/review and approved Groq-backed assistive workflows with secrets kept server-side and human review enforced.
5. Add route-aware SEO/social metadata, sitemap, robots rules, and share controls.
6. Test authorization, input handling, privacy boundaries, mobile/accessibility, SEO crawlability, social previews, and performance before deployment.

## Approval boundary

This document is an updated proposal based on the owner's stated stack and goals. It is not approval to build or deploy. Confirm the open decisions and approve the plan before application implementation or collection of lead data.
