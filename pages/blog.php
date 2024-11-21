<!-- blog.php: Home page for my Spain blog! -->
<!-- created 11/19/24 by John Mathews -->

<?php
// include functions.php and gather posts
include "../includes/functions.php";
$posts = getPosts(); 
?>

<!DOCTYPE html>
<html lang="en">

    <!-- load scripts -->
    <script src="../scripts.js"></script>

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
                <a href="blog.php">La vida en Espana</a>
                <a href="about.html">About</a> 
            </nav>
        </header>

        <!-- information I want to say on the page -->
        <main>
            <div id="posts">

                <!-- are there posts on my blog? -->
                <?php if (!empty($posts)): ?>

                    <!-- display each JSON post on the page -->
                    <?php foreach ($posts as $post): ?>
                        <div class="post-card">

                            <!-- display title, date, and content -->
                            <h3><?= htmlspecialchars($post['title']) ?></h3>
                            <p><em><?= htmlspecialchars($post['date']) ?> by <?= htmlspecialchars($post['author']) ?></em></p>
                            <p><?= nl2br(htmlspecialchars(substr($post['content'], 0, 150))) ?></p>

                            <!-- display images in slideshow, if there are any -->
                            <div class="post-slideshow">
                                <?php if (!empty($post['images'])): ?>
                                    <?php foreach ($post['images'] as $image): ?>
                                        <img src="../<?= htmlspecialchars($image) ?>" alt="Post image">
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <!-- too lazy to add posts, tell the user -->
                <?php else: ?>
                    <p>No posts available yet. Check back soon!</p>
                <?php endif; ?>
            </div>
        </main>

        <!-- contents of footer -->
        <footer>
            <p>&copy; 2024 John Mathews</p>
        </footer>
    </body>
</html>