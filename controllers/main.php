<?php

//подготавливаем данные
//запросы и обработку в БД, валидация запросов и прочее
$lastNews = [
    [ 'header' => 'Новость 1', 'date' => '12.05.2020', 'text' => 'Текст текст текст', 'author' => 'Nos'],
    [ 'header' => 'Новость 2', 'date' => '13.05.2020', 'text' => 'Это другой текст', 'author' => 'Rodger'],
    [ 'header' => 'Новость 3', 'date' => '14.05.2020', 'text' => 'Это другой текст', 'author' => 'Marie'],
    [ 'header' => 'Новость 4', 'date' => '15.05.2020', 'text' => 'Это другой текст', 'author' => 'Jane'],
    [ 'header' => 'Новость 5', 'date' => '16.05.2020', 'text' => 'Это другой текст', 'author' => 'Zoe'],
    [ 'header' => 'Новость 6', 'date' => '17.05.2020', 'text' => 'Это другой текст', 'author' => 'Elvis'],
    [ 'header' => 'Новость 7', 'date' => '18.05.2020', 'text' => 'Это другой текст', 'author' => 'Ann'],
    [ 'header' => 'Новость 8', 'date' => '19.05.2020', 'text' => 'Это другой текст', 'author' => 'John'],
];

$auth = [
    'name' => 'Victoria',
    'email' => 'vi@vi.ru'
];
require_once ROOT . '/templates/main.php';
