<?php
    $newsId = $parts[2];
    if($newsId) {
        include 'templates/news.php';
    } else {
        include 'templates/notfound.php';
    }