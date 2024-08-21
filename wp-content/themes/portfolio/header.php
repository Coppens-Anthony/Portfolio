<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anthony Coppens">
    <meta name="keywords" content="html, portfolio, projets, infographie, site, web, design">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="/wp-content/themes/portfolio/src/img/svg/SVG/logo.svg">
    <link rel="stylesheet" href="<?= dw_asset("css/main.css") ?>">
    <title>Portfolio - <?php echo $title ?? ''; ?></title>
</head>
<body>
<header class="header">
    <h1 class="sr-only">Portfolio</h1>
    <nav class="main-nav">
        <h2 class="sr-only">
            Navigation principale
        </h2>
        <a href="/" title="Retour &agrave; l&apos;accueil">
            <img src="/wp-content/themes/portfolio/src/img/svg/SVG/logo.svg" alt="Logo de mon portfolio">
        </a>
        <div class="burger-menu">
            <input type="checkbox" id="menu__toggle">
            <label for="menu__toggle" class="burger-button">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a href="/" class="<?= urlIs('/') ? 'current_page' : '' ?>" title="Vers la page d&apos;Accueil">Accueil</a></li>
                <li><a href="/a-propos/" class="<?= urlIs('/a-propos/') ? 'current_page' : '' ?>" title="Vers la page &agrave; propos">&Agrave; propos</a>
                </li>
                <li><a href="/projets/" class="<?= urlIs('/projets/') ? 'current_page' : '' ?>"
                       title="Vers mes projets ">Projets</a></li>
                <li class="contact-nav"><a href="/contact/" class="<?= urlIs('/contact/') ? 'current_page' : '' ?>" title="Vers la page de Contact">Contact</a>
                </li>
            </ul>
            <ul class="desktop-nav">
                <li><a href="/" class="<?= urlIs('/') ? 'current_page' : '' ?>" title="Vers la page d&apos;Accueil">Accueil</a></li>
                <li><a href="/a-propos/" class="<?= urlIs('/a-propos/') ? 'current_page' : '' ?>" title="Vers la page &agrave; propos">&Agrave; propos</a>
                </li>
                <li><a href="/projets/" class="<?= urlIs('/projets/') ? 'current_page' : '' ?>"
                       title="Vers mes projets ">Projets</a></li>
                <li class="contact-nav"><a href="/contact/" class="<?= urlIs('/contact/') ? 'current_page' : '' ?>" title="Vers la page de Contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>