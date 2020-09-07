<?php
// $newsId = $parts[2];
// if (!empty($newsId)) {
//     include 'templates/news.php';
// } else {
//     include 'templates/notfound.php';
// }
// require_once 'templates/news.php';


//В контроллере news.php сделай запрос к базе данных,
// выбирающих все новости, вот тут есть примерчик - https://www.php.net/manual/ru/mysqli-result.fetch-assoc.php
$mysqli = new mysqli("localhost", "vasya", "123123", "TESTb2b");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT header, date, text FROM News ORDER by ID";

if ($result = $mysqli->query($query)) {

    /* извлечение ассоциативного массива */
    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["header"], $row["date"], $row["text"]);
    }

    /* удаление выборки */
    $result->free();
}

/* закрытие соединения */
$mysqli->close();


?>