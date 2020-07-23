<?php
    define(ROOT, __DIR__); //определяем константу для корневого пути
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $uri);
//    var_dump($parts);die();
    switch ($parts[1]) {
        case 'news':
            include 'controllers/news.php';
            break;
        default;
            include 'controllers/main.php';
            break;
        case 'about':
            include 'controllers/about.php';
            break;
    }
