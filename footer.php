<?php
    require_once (ROOT . "/controllers/linkWatcher.php");
?>
<head>
    <link rel="stylesheet" href="/assets/bootstrap_3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap_3/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<div class = "footer">
    <div class="container">
        <div class="flex-row">
            <div class="col-lg-4">
                <a href="/cooperation/" class="header__link js-scroll-to <?= substr_count($linkTab, "cooperation") ? "active" : "" ?>">Условия сотрудничества</a>
            </div>
            <div class="col-lg-4">
                <a href="/info/" class="header__link js-scroll-to <?= substr_count($linkTab, "info") ? "active" : "" ?>">Дополнительная информация</a>
            </div>
            <div class="col-lg-4">
                <a href="/contacts/" class="header__link js-scroll-to <?= substr_count($linkTab, "contacts") ? "active" : "" ?>">Контакты</a>
            </div>
            </div>
        </div>
    </div>
</div>

<?php 
if($link) {
    mysqli_close($link); 
}
?>
<!-- <script src="/assets/bootstrap_3/js/bootstrap.min.js"></script>
<script scr="/assets/bootsr"></script> -->