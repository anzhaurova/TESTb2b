<?php
define(ROOT, __DIR__);
$uri = $_SERVER['REQUEST_URI']; 
$parts = explode('/', $uri); //разбиваем строку
$newsId = $parts[2];
if (!empty($newsId)) {
    include 'templates/news.php';
} else {
    include 'templates/notfound.php';
}
//require_once 'templates/news.php';