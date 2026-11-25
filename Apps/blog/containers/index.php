<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhammad Jamil — Systems, Software and Product Thinking</title>
    <meta name="description" content="Articles by Muhammad Jamil and Jamilsoft Technologies on systems architecture, software delivery, SaaS, and practical technology decisions.">
    <meta property="og:title" content="Muhammad Jamil — Systems, Software and Product Thinking">
    <meta property="og:description" content="Practical writing on systems architecture and software for growing businesses.">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="Apps/blog/assets/blog.css">
</head>
<body>
    <header class="site-header">
        <div class="shell header-inner">
            <a class="brand" href="/blog" aria-label="Jamilsoft Blog home">
                <span class="brand-mark">MJ</span>
                <span>Muhammad Jamil</span>
            </a>
            <nav aria-label="Primary navigation">
                <a href="/blog">Articles</a>
                <a href="https://jamilsoft-bot.github.io/">Profile</a>
                <a class="nav-cta" href="#inquiry">Start a conversation</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="shell hero-grid">
                <div>
                    <p class="eyebrow">Jamilsoft Journal</p>
                    <h1>Systems, software, and decisions that hold up over time.</h1>
                    <p class="hero-copy">Practical writing from Muhammad Jamil on architecture, SaaS, software delivery, and technical growth.</p>
                </div>
                <aside class="hero-note">
                    <strong>What I work on</strong>
                    <span>Systems architecture</span>
                    <span>Software development</span>
                    <span>Product and SaaS systems</span>
                </aside>
            </div>
        </section>

        <section class="posts-section shell" aria-labelledby="latest-heading">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">Latest writing</p>
                    <h2 id="latest-heading">Recent articles</h2>
                </div>
            </div>
            <div class="post-grid">
                <?php foreach ($posts as $post): ?>
                    <article class="post-card">
                        <div class="post-meta">
                            <span><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <span><?php echo htmlspecialchars($post['read_time'], ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <h3><?php echo htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <a href="/blog/article/<?php echo rawurlencode($post['slug']); ?>">Read article <span aria-hidden="true">→</span></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="inquiry" id="inquiry">
            <div class="shell inquiry-inner">
                <div>
                    <p class="eyebrow">Work together</p>
                    <h2>Have a system that needs clearer direction?</h2>
                </div>
                <a class="button" href="mailto:myakububauchi@gmail.com?subject=Blog%20inquiry">Discuss a project</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="shell footer-inner">
            <span>© <?php echo date('Y'); ?> Muhammad Jamil / Jamilsoft Technologies</span>
            <a href="https://github.com/jamilsoft-bot">GitHub</a>
        </div>
    </footer>
</body>
</html>
