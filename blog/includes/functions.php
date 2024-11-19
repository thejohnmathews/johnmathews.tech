<?php
function getPosts($folder = "posts/") {
    $files = glob($folder . "*.json");
    $posts = [];
    foreach ($files as $file) {
        $content = json_decode(file_get_contents($file), true);
        $posts[] = $content;
    }
    usort($posts, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']); // Sort by date (newest first)
    });
    return $posts;
}

function getPost($filename) {
    $file = "posts/$filename.json";
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), true);
    }
    return null;
}
?>