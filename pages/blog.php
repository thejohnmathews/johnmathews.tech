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
                <a href="about.php">About Me</a> 
            </nav>
        </header>

        <!-- information I want to say on the page -->
        <main id="blog-page">
            <div id="posts">

                <!-- are there posts on my blog? -->
                <?php if (!empty($posts)): ?>

                    <!-- display each JSON post on the page -->
                    <?php foreach ($posts as $post): ?>
                        <div class="post-card">

                            <!-- display title and date -->
                            <h3><?= htmlspecialchars($post['title']) ?></h3>
                            <p><em><?= htmlspecialchars($post['date']) ?> by <?= htmlspecialchars($post['author']) ?></em></p>
                            
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
                        </div>
                    <?php endforeach; ?>

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

                <!-- too lazy to add posts, tell the user -->
                <?php else: ?>
                    <p>No posts available yet. Check back soon!</p>

                    <!-- contents of footer -->
                    <footer id="fixed-footer">
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
                <?php endif; ?>
            </div>
        </main>

        <!-- Load Imgur Embed Script Once -->
        <script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
        <!-- Load JavaScript -->
        <script src="../script.js"></script>
    </body>
</html>
