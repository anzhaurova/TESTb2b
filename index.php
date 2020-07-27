<?php
    define(ROOT, __DIR__); //определяем константу для корневого пути 
    $uri = $_SERVER['REQUEST_URI'];
    // var_dump($_SERVER);die();
    $parts = explode('/', $uri); //разбиваем строку 
//    var_dump($parts);die();
    switch ($parts[1]) {
        case 'news':
            include 'controllers/news.php';
            break;
        default;
            include 'controllers/main.php'; //по умолчанию прогружается главная стр
            break;
        case 'about':
            include 'controllers/about.php';
            break;
    }

