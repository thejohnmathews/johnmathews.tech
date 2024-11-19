<?php
function getPosts($folder = "../posts/") {
    $files = glob($folder . "*.json");
    $posts = [];

    foreach ($files as $file) {
        $data = json_decode(file_get_contents($file), true);
        if ($data) {
            $posts[] = $data;
        }
    }

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
