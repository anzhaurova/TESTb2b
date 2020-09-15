<?php
//В контроллере news.php сделай запрос к базе данных,
// выбирающих все новости, вот тут есть примерчик - https://www.php.net/manual/ru/mysqli-result.fetch-assoc.php

// $link = mysqli_connect("localhost", "vasya", "123123", "TESTb2b");
$query = "SELECT id, header, date, text FROM news ORDER BY id";


// var_dump(mysqli_query($link, $query));die();
$arrNews = [];

if ($result = mysqli_query($link, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
        var_dump($row);
        $arrNews[$row["id"]] = $row;
    }

    /* удаление выборки */
    mysqli_free_result($result);
}

/* закрытие соединения */
mysqli_close($link);

$newsId = $parts[2];
if (!empty($newsId)) {
    include 'templates/news.php';
} else {
    include 'templates/notfound.php';
}
require_once 'templates/news.php';