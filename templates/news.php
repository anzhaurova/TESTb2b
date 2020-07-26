<?
require_once ROOT . '/header.php';
$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);
$newsId = $parts[2];
//require ROOT . "/controllers/main.php";

?>
<html>
    <body>
        <h4>Новость номер <?= $newsId?></h4>
    </body>
</html>
<?require_once ROOT . '/footer.php';?>

