<!-- Подключить хидер -->
<?
    require_once ROOT . '/templates/partial/header.php';
?>

<h4>Последние новости про котов:</h4>

<?php 

foreach($lastNews as $news) 
{
?>

<p><strong><?=$news['header']?></strong> <?=$news['text']?></p>

<?
}

?>
<?
    require_once ROOT . '/templates/partial/footer.php';
?>