<?php
    require './bootstrap.php';
?><!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <base href="http<?= $_SERVER['HTTPS'] ? 's' : '' ?>://<?= $_SERVER['HTTP_HOST'] ?>/">
    <meta name="description" content="<?= isset($meta[$currentPage]) ? $meta[$currentPage]['description'] : $meta['home']['description'] ?>" >
    <meta name="keywords" content="<?= isset($meta[$currentPage]) ? $meta[$currentPage]['keywords'] : $meta['home']['keywords'] ?>" >
    <title><?= isset($meta[$currentPage]) ? $meta[$currentPage]['title'] : $meta['home']['title'] ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" si  zes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="prefetch" type="text/css" href="css/damavis.css?ts=<?= time(); ?>" />
    <link type="text/css" rel="stylesheet" href="css/damavis.css?ts=<?= time(); ?>" />
</head>
<body>
    <div class="<?= isset($darkBg) && $darkBg ? 'dark-bg' : '' ?>" id="main">
        <header class="home <?= isset($darkBg) && $darkBg ? 'relative' : 'fixed' ?>">
            <a href="/<?= $lang ?>/">
                <img src="img/logo-<?= isset($darkBg) && $darkBg ? 'light' : 'dark' ?>.svg" class="logo" width="240" height="122" alt="DAMAVIS - DAta MAchine learning VISualization" /></a>
            <div>
                <nav class="langs">
                    <a href="<?= preg_replace('#^/(en|es)/#', '/es/', $_SERVER['REQUEST_URI']) ?>" class="<?= $lang == 'es' ? 'active' : '' ?>">ESP</a>
                    <a href="<?= preg_replace('#^/(en|es)/#', '/en/', $_SERVER['REQUEST_URI']) ?>" class="<?= $lang == 'en' ? 'active' : '' ?>">ENG</a>
                </nav>
<?php include(__DIR__ . '/navigation.php'); ?>
                <nav class="social">
                    <img alt="Facebook" src="img/icons/FacebookDark.svg">
                    <img alt="Twitter" src="img/icons/TwitterDark.svg">
                    <img alt="Instagram" src="img/icons/InstagramDark.svg">
                    <img alt="Github" src="img/icons/GithubDark.svg">
                </nav>
                <div class="burger"></div>
                <!--<img class="burger" src="img/icons/Burger.png" />-->
            </div>
        </header>