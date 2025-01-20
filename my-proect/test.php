<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaptive Website</title>
    <link rel="stylesheet" href="sas/test.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="sas/faviconImage/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="sas/faviconImage/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="sas/faviconImage/favicon-16x16.png">
    <link rel="manifest" href="sas/faviconImage/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<header class="header">
    <div class="header__border"></div>
    <div class="header__logo"><img class="logoimg" src="sas/images/my-logo.jpg" alt="headerlogo"></div>
    <nav class="header__nav">
        <ul class="header__list">
            <li class="header__item"><a class="header__link"
                    href="test.php">Главная</a></li>
            <li class="header__item"><a class="header__link"
                    href="../guest-site/guest.html">обо мне </a></li>
            <li class="header__item"><a class="header__link"
                    href="../guest-site/guest.html">Контанкты</a></li>
        </ul>
    </nav>
</header>
<main class="content">

    <section class="content__intro">
        <h1 class="smak">Добро пожаловать на сайт Dizzy</h1>
        <p>Это сайт с различными Историями</p>
    </section>
    <section class="content__page">

        <div class="left__menu">
            <h1><a href="#"></a>Меню</h1>
            <div class="content__page__nav">
                <a href="#">Переход в Киберпанк</a>

            </div>
        </div>
        <div class="main__content">
            <h1 class="main__content__hed">Переход в Киберпанк</h1>
            <h3>Пролог: Темные Воды Будущего</h2>
                <p>В начале XXI века мир погрузился в хаос. Изменение климата и экономическое неравенство привели к социальным волнениям. Правительства теряли контроль, и на их место приходили могущественные корпорации, которые использовали технологии для манипуляции массами.</p>
                <h3>Город Света и Тени</h3>
                <p>Города стали мегаполисами, где сверкающие небоскрёбы соперничали с мрачными трущобами. Неоновые огни ослепляли взгляд, а улицы кишели людьми, которые искали своё место в новой реальности. Кибернетические импланты стали обычным делом, а хакеры — современными героями, борющимися с системой.</p>
                <h3>Нова: Хакерша с Миссией</h3>
                <p>В этом мире жила Нова — молодая хакерша с выдающимися навыками. Она использовала свою силу, чтобы разоблачать коррупцию и защищать тех, кто не мог защитить себя. Её цель была ясна: вернуть контроль у людей, отобранный у них могущественными корпорациями.</p>
                <h3>Тайный Проект</h3>
                <p>Однажды Нова наткнулась на информацию о секретном проекте, который обещал «идеальное общество», но на самом деле скрывал план тотального контроля над населением. Поняв, что это может стать концом свободы, она решила действовать.</p>
                <h3>Сопротивление</h3>
                <p>Нова объединила усилия с группой сопротивления, состоящей из хакеров, бунтарей и простых людей, стремящихся к переменам. Они разработали план по разрушению системы, которая угнетала человечество. Битва развернулась не только в реальном мире, но и в виртуальном пространстве, где каждый ход мог стать решающим.</p>
                <h3>Виртуальная Битва</h3>
                <p>Виртуальные стены системы были охраняемы мощными алгоритмами, но Нова и её команда были готовы. С помощью хитроумных стратегий они смогли проникнуть в ядро системы. Нова запустила вирус, который разрушил все данные, хранящиеся о людях в корпоративных серверах, возвращая свободу и анонимность.</p>
                <h3>Эпилог: Новая Эра</h3>
                <p>После разрушения системы мир начал меняться. Люди осознали, что технологии могут быть как благословением, так и проклятием. Нова стала символом сопротивления и надежды для нового поколения, вдохновляя всех на борьбу за свободу в мире, где киберпанк стал реальностью. Эра, в которой каждый мог стать хозяином своей судьбы, только начиналась.</p>

        </div>
    </section>
    <div class="nextContent"><img class="image" src="sas/images/KIbergirl.gif" alt="Responsive Image"></div>
    <div class="set_commit">
        <section class="commits">
            <form action="form.commits.php" class="FORM" method="post">
                <label for="name">Ваше имя:</label>
                <input type="text" name="name" id="name" required>
                <label for="message">Комментарий</label>
                <textarea name="message" id="message"></textarea>
                <button type="submit">О т п р а в и т ь</button>
            </form>
        </section>
    </div>
    <div class="comments"><?php include "commits.php"; ?></div>
</main>
<footer class="footer">
    <p>© 2024 Adaptive Website</p>
</footer>
</body>

</html>