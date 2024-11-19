<?php
include "../includes/functions.php"; // Adjust the path to functions.php
$posts = getPosts(); // Fetch all blog posts
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - John Mathews' Blog</title>
    <link rel="stylesheet" href="../styles.css"> <!-- Update path to styles.css -->
</head>
<body>
    <header>
        <h1>Blog Posts</h1>
        <nav>
            <a href="../index.php">Home</a> <!-- Adjust link to home page -->
            <a href="../about.html">About</a> <!-- Adjust link to about page -->
        </nav>
    </header>
    <main>
        <h2>All Posts</h2>
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
                <p>No posts available yet. Check back soon!</p>
            <?php endif; ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 John Mathews</p>
    </footer>
</body>
</html>
