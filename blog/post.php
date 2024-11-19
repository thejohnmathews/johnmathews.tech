<?php
include "includes/functions.php";
$file = $_GET['file'] ?? null;
$post = $file ? getPost($file) : null;

if (!$post) {
    echo "Post not found.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($post['title']) ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p><em><?= htmlspecialchars($post['date']) ?> by <?= htmlspecialchars($post['author']) ?></em></p>
    <div><?= nl2br(htmlspecialchars($post['content'])) ?></div>
    <a href="index.php">Back to Home</a>
</body>
</html>
