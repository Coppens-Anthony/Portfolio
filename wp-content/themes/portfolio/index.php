<?php

$title = 'Accueil';

include 'header.php';
/*
Template Name: Home Page
*/


?>

<main class="home" itemscope itemtype="https://schema.org/Person">
    <div>
        <h2 itemprop="jobTitle">WEB DEVELOPER</h2>
        <h3> <span itemprop="givenName">Anthony</span> <span itemprop="familyName">Coppens</span></h3>
        <p>Bienvenue sur mon portfolio, o&ugrave; chaque projet est une vitrine de ma passion et de mon savoir-faire. </p>
        <a class="links" href="/Projets" title="Voir tous mes projets">Mes projets</a>
    </div>
    <img src="/wp-content/themes/portfolio/src/img/me.jpeg" alt="Photo de moi" id="me">
    <div class="rectangle"></div>
</main>
<?php include 'footer.php'; ?>