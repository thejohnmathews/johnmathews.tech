<?php
// include functions.php and gather posts
include "../includes/functions.php";
$posts = getPosts(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Life in Spain</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        <header>
            <h1>My Blog About Living in Spain!</h1>
            <nav>
                <a href="../index.php">Home</a> 
                <a href="blog.php">La vida en Espana</a>
                <a href="about.html">About</a> 
            </nav>
        </header>
        <main>
            <h2>Current Posts</h2>
            <div id="posts">
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="post">
                            <h3>
                                <a href="../post.php?file=<?= urlencode(basename($post['date'] . '-' . strtolower(str_replace(' ', '-', $post['title']))) . '.json') ?>">
                                    <?= htmlspecialchars($post['title']) ?>
                                </a>
                            </h3>
                            <p><em><?= htmlspecialchars($post['date']) ?> by <?= htmlspecialchars($post['author']) ?></em></p>
                            <p><?= nl2br(htmlspecialchars(substr($post['content'], 0, 150))) ?>...</p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Sory I have been busy, so there are no posts to see!</p>
                <?php endif; ?>
            </div>
        </main>
        <footer>
            <p>&copy; 2024 John Mathews</p>
        </footer>
    </body>
</html>