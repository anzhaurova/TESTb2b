<?php
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $uri);
//    var_dump($parts);die();
    switch ($parts[1]) {
        case 'news':
            include 'controllers/news.php';
            break;
        default;
            echo 'Главная страница';
            break;
        case 'about':
            include 'templates/about.php';
            break;
    }
