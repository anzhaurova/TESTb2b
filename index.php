<?php
    define(ROOT, __DIR__);//определяем константу для корневого пути 

    //подключиться к БД
    $link = mysqli_connect("localhost", "vasya", "123123", "TESTb2b");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    } else {
        echo "Соединение с MySQL установлено!" . PHP_EOL;
        echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
        mysqli_close($link);
    }

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
        break;
        case 'cooperation':
            include 'controllers/cooperation.php';
        break;
        case 'info':
            include 'controllers/info.php';
        break;
        case 'blog':
            //сюда написать все руками вместо инклудов
            
            //проверка данных
            //взятие данных из БД

            echo '';
        break;    
    }

    /*http://testb2b.local/news/3*/
    

?>