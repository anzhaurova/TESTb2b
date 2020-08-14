<?php
    define(ROOT, __DIR__);//определяем константу для корневого пути 
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $uri); //разбиваем строку
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
        case 'feedback':
            include 'controllers/feedback.php';
        break; 
        case 'contacts':
            include 'controllers/contacts.php';
        case 'cooperation':
            include 'controllers/cooperation.php';
        case 'blog':
            //сюда написать все руками вместо инклудов
            
            //проверка данных
            //взятие данных из БД

            echo '';
        break;    
    }

    /*http://testb2b.local/news/3*/

?>