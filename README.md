# Blog on JamilX

This repository is being assembled as a complete JamilX application with the blog app in `Apps/blog/`.

## Framework status

The JamilX framework source is not yet vendored into this repository. The current GitHub integration can create or update file contents, but cannot copy a complete repository tree—including its binary assets—from `jamilsoft-bot/JamilX` in one operation. This README does not claim that the framework is already present.

## Blog app

`Apps/blog/` follows the JamilX installed-app bootstrap pattern: `blog.php` loads the app prototype and service, `services.php` defines the `blog` service, and `containers/index.php` renders the public landing page. Posts are temporary in-memory sample records.

The JamilX framework loads installed apps from the database, so the app must be installed/configured through JamilX before `/blog` is routable.

## Framework source

- Upstream: https://github.com/jamilsoft-bot/JamilX
- Upstream branch inspected: `master`
- Upstream commit inspected: `367b523f8ad897ad4d58eadb56c5b7f85ffa6733`
- Upstream license file: MIT; verify applicable terms for any additional bundled assets before redistribution.

## Next setup steps

1. Import the full upstream JamilX `master` tree at the repository root, preserving its files and assets.
2. Keep the blog app under `Apps/blog/` and install the app in JamilX.
3. Configure a local `.env` using the framework's `.env.example`; do not commit credentials.
4. Replace sample posts with parameterized MySQL queries and add article-detail routing.

After the framework import, JamilX's documented local checks are `php jamilx doctor` and `php jamilx serve` (PHP 7.4+, required extensions, and MySQL/MariaDB configuration).
