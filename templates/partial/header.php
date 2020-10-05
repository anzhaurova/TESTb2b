<?php
    require_once (ROOT . "/controllers/linkWatcher.php");
?>
<head>
    <link rel="stylesheet" href="/assets/bootstrap_3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap_3/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <?php
    $pageProperties = [
        "main" => [
            "title" => "Главная страница",
            "keywords" => "keywords для главной",
            "template" => "templates/main.php",
        ],
        "news" => [
            "title" => "Новости",
            "keywords" => "keywords для новостей",
            "template" => "templates/news.php",
        ],
        "about" => [
            "title" => "О нас",
            "keywords" => "keywords для О нас",
            "template" => "templates/about.php",
        ],
        "feedback" => [
            "title" => "Обратная связь",
            "keywords" => "keywords для обратной связи",
            "template" => "templates/feedback.php",
        ],
        "contacts" => [
            "title" => "Контакты",
            "keywords" => "keywords для контактов",
            "template" => "templates/contacts.php",
        ],
        "cooperation" => [
            "title" => "Условия сотрудничества",
            "keywords" => "keywords для условия сотрудничества",
            "template" => "templates/cooperation.php",
        ],
        "info" => [
            "title" => "Дополнительная информация",
            "keywords" => "keywords для дополнительной информации",
            "template" => "templates/info.php",
        ],
    ];

    ?>
    <title><?php echo $pageProperties[$parts[1]]["title"]; ?></title>
</head>
<div class = "header">
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



