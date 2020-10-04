<?php
    require_once ROOT . '/templates/partial/header.php';
    $uri = $_SERVER['REQUEST_URI'];
    $parts = explode('/', $uri);
    $newsId = $parts[2];
?>
<html>
    <body>
        <h4>Новость номер <?= $newsId?></h4>
        <h5><?= $arrNews[$newsId]["header"] ?></h5>
        <div><?= $arrNews[$newsId]["text"] ?></div>
        <div><?= $arrNews[$newsId]["date"] ?></div>
    </body>
</html>
<?require_once ROOT . '/templates/partial/footer.php';?>

