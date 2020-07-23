<!-- Подключить хидер -->
<?
    require_once ROOT . '/header.php';
?>

Последние новости:


<?php 

foreach($lastNews as $news) 
{
?>

<p><strong><?=$news['header']?></strong> <?=$news['text']?></p>

<?
}

?>
<!-- Подключить футер -->
<?
    require_once ROOT . '/footer.php';
?>