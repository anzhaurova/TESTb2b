<?php
    require_once ROOT . '/header.php';
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $uri);
    $newsId = $parts[2];
?>
<html>
    <body>
        <h4>Новость номер <?= $newsId?></h4>
    </body>
</html>
<?require_once ROOT . '/footer.php';?>
<!--вывести циклом все новости-->
<?
    foreach ($variable as $key => $value) {
       echo "<td>$value</td>";
    }
?>


