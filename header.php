<?php
    require_once (ROOT . "/controllers/linkWatcher.php");
?>
<head>
    <link rel="stylesheet" href="/assets/bootstrap_3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap_3/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/styles.css">

</head>
<div class = "header">
    <!-- <div class="section__wrap header__wrap">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item"><a href="#main" class="header__link js-scroll-to">Главная</a></li>
                <li class="header__item"><a href="#rules" class="header__link js-scroll-to">Правила</a></li>
                <li class="header__item"><a href="#news" class="header__link js-scroll-to">Новости</a></li>
                <li class="header__item"><a href="#feedback" class="header__link js-scroll-to">Обратная связь</a></li>
            </ul>
        </nav>
        <a href="" class="header__contact">Бесплатная горячая линия 8 800 000 0000</a> -->
    <div class="container">
        <div class="flex-row">
            <div class="col-lg-3">
                <a href="/main/" class="header__link js-scroll-to <?= substr_count($linkTab, "main") ? "active" : "" ?>">Главная</a>
            </div>
            <div class="col-lg-3">
                <a href="/about/" class="header__link js-scroll-to <?= substr_count($linkTab, "about") ? "active" : "" ?>">О нас</a>
            </div>
            <div class="col-lg-3">
                <a href="/news/" class="header__link js-scroll-to <?= substr_count($linkTab, "news") ? "active" : "" ?>">Новости</a>
            </div>
            <div class="col-lg-3">
                <a href="/feedback/" class="header__link js-scroll-to <?= substr_count($linkTab, "feedback") ? "active" : "" ?>">Обратная связь</a>
            </div>
        </div>
    </div>
</div>



