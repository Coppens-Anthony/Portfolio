<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Anthony Coppens">
    <meta name="keywords"
          content="Portfolio, Anthony Coppens, d&eacute;veloppeur web, graphiste, design, d&eacute;veloppeur, front-end, back-end, full-stack, HEPL, &eacute;tudiant, wordpress, github, cv, portfolio">
    <meta name="description"
          content="D&eacute;couvrez le portfolio d&apos;Anthony Coppens. &Eacute;tudiant &agrave; l&apos;HEPL de Seraing, en voie de devenir un d&eacute;veloppeur full stack.">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/portfolio/public/css/style.css">
    <link rel="icon" href="/wp-content/themes/portfolio/src/svg/logo.svg">
    <script type="module" crossorigin src="/wp-content/themes/portfolio/public/js/main.js" defer></script>
    <title>Portfolio - <?= get_the_title() ?></title>
</head>
<body>
<header class="header">
    <h1 class="sr-only">Portfolio</h1>
    <div class="main-nav">
        <a href="/" title="Retour &agrave; l&apos;accueil">
            <img src="/wp-content/themes/portfolio/src/svg/logo.svg" alt="Logo de mon portfolio">
        </a>
        <input type="checkbox" id="menuToggle">
        <label for="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav>
            <h2 class="sr-only">
                Navigation principale
            </h2>
            <ul>
                <?php foreach (dw_get_navigation_links('header') as $link):
                    $is_active = ($_SERVER['REQUEST_URI'] == parse_url($link->href, PHP_URL_PATH)) ? 'current_page' : ''; ?>
                    <li>
                        <a href="<?= $link->href; ?>"
                           title="Vers la page <?= $link->label ?>"
                           class="<?= $is_active ?>"
                        >
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>