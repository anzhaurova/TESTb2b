<?php
//В контроллере news.php сделай запрос к базе данных,
// выбирающих все новости, вот тут есть примерчик - https://www.php.net/manual/ru/mysqli-result.fetch-assoc.php

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}

$link = mysqli_connect("localhost", "vasya", "123123", "TESTb2b");
$query = "SELECT id, header, date, text FROM news ORDER BY id";


// var_dump(mysqli_query($link, $query));die();
$arrNews = [];

if ($result = mysqli_query($link, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
        $arrNews[$row["id"]] = array(
            "header" => $row["header"],
            "date" => $row["date"],
            "text" => $row["text"],
        );
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