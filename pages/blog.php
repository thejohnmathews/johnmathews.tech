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

                            <!-- display title and date aligned in center-->
                            <h3><?= htmlspecialchars($post['title']) ?></h3>
                            <p><em><?= htmlspecialchars($post['date']) ?> by <?= htmlspecialchars($post['author']) ?></em></p>
                            
                            <!-- display post conted aligned on left-->
                            <div class="content">
                                <p><?= nl2br(htmlspecialchars(substr($post['content'], 0, 150))) ?></p>
                            </div>

                            <!-- display images in slideshow, if there are any -->
                            <div class="post-slideshow">
                                <div class="slideshow-container">
                                    <?php if (!empty($post['images'])): ?>
                                        <?php foreach ($post['images'] as $index => $image): ?>
                                            <img src="../blog/<?= htmlspecialchars($image) ?>" 
                                                alt="Post image <?= $index + 1 ?>" 
                                                class="slide <?= $index === 0 ? 'active' : '' ?>">
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <button class="prev" onclick="changeSlide(this, -1)">&#10094;</button>
                                    <button class="next" onclick="changeSlide(this, 1)">&#10095;</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- dynamic footer -->
                    <footer> <p>&copy; 2024 John Mathews</p> </footer>
                <!-- too lazy to add posts, tell the user -->
                <?php else: ?>
                    <p>No posts available yet. Check back soon!</p>

                     <!-- fixed footer -->
                    <footer id = "fixed-footer"> <p>&copy; 2024 John Mathews</p></footer>
                <?php endif; ?>
            </div>
        </main>

        <!-- Load JavaScript -->
        <script src="../script.js"></script>
    </body>
</html>