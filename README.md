# Jamilsoft Blog

A JamilX-compatible personal and professional blog for Muhammad Jamil and Jamilsoft Technologies.

## Current scope

This MVP establishes a runnable public-facing blog shell. It uses JamilX's Service/Action/Container/Prototype conventions and keeps future MySQL, AI, and social integrations server-side.

## Stack

- PHP 7.4+
- JamilX framework conventions
- HTML/CSS/vanilla JavaScript
- Tailwind CDN allowed only for rapid prototyping
- MySQL planned for persisted posts and leads

## Structure

```text
services/        Route-level blog service
actions/         HTTP and page actions
containers/      PHP views and layouts
prototypes/      In-memory seed data and future DB helpers
assets/          Stylesheets and scripts
database/        Future migrations and seeders
```

## Run locally

Use JamilX's PHP server from the framework root after placing or linking this application inside the JamilX `Apps/Blog` convention:

```bash
php jamilx doctor
php jamilx serve
```

Before deployment, confirm JamilX routing and database setup. This MVP can also be previewed with any PHP-capable local server, but JamilX routing remains the authoritative integration.

## Next implementation phases

1. Persist posts and taxonomy in MySQL.
2. Add JamilX authentication and editorial routes.
3. Add lead capture and status management.
4. Add Groq-assisted drafting behind server-side controls.
5. Add approved social-sharing jobs and cron execution.
