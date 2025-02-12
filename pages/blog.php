<!-- blog.php: Home page for my Spain blog! -->
<!-- created 11/19/24 by John Mathews -->

<?php
// include functions.php and gather posts
include "../includes/functions.php";
$posts = getPosts();
?>

<!DOCTYPE html>
<html lang="en">

    <!-- set page metadata -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>johnmathews.tech</title>
        <link rel="stylesheet" href="../styles.css">
        <script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
        <script src="../blog/includes/imgurembed.js" defer></script>
    </head>

    <!-- contents of page -->
    <body>

        <!-- holds nav bar and important constant info -->
        <header>
            <h1>My Blog About Living in Spain!</h1>
            <nav>
                <a href="../index.php">Home</a> 
                <a href="blog.php" class="active">Mi vida en España</a>
                <a href="mooc.php">NALCAP MOOC</a>
            </nav>
        </header>

        <!-- information I want to say on the page -->
        <main id="blog-page">

                <!-- display each JSON post on the page -->
                <?php foreach ($posts as $post): ?>
                    <section id="project-details">

                        <!-- display title and date -->
                        <h2><?= htmlspecialchars($post['title']) ?></h2>
                        <h3><em><?= htmlspecialchars($post['date']) ?> by <?= htmlspecialchars($post['author']) ?></em></h3>
                        
                        <!-- display post content -->
                        <div class="content">
                            <p><?= nl2br(htmlspecialchars(substr($post['content'], 0))) ?></p>
                        </div>

                        <!-- display imgur embed -->
                        <?php if (!empty($post['imgurId'])): ?>
                            <div class="imgur-embed-container">
                                <blockquote class="imgur-embed-pub" lang="en" data-id="a/<?= htmlspecialchars($post['imgurId']) ?>">
                                    <a href="//imgur.com/a/<?= htmlspecialchars($post['imgurId']) ?>">View on Imgur</a>
                                </blockquote>
                            </div>
                        <?php endif; ?>
                    </section>
                <?php endforeach; ?>
        </main>

        <!-- dynamic footer -->
        <footer>
            <p>&copy; 2024 John Mathews</p>
            <div id="social-media-links">
                <a href="https://www.linkedin.com/in/thejohnmathews" target="_blank" title="LinkedIn">
                    <img src="../assets/icons/linkedin.png" alt="LinkedIn Logo" class="social-icon">
                </a>
                <a href="https://github.com/thejohnmathews" target="_blank" title="GitHub">
                    <img src="../assets/icons/github.png" alt="GitHub Logo" class="social-icon">
                </a>
                <a href="https://www.instagram.com/john.em" target="_blank" title="Instagram">
                    <img src="../assets/icons/instagram.png" alt="Instagram Logo" class="social-icon">
                </a>
            </div>
        </footer>
    </body>
</html>
