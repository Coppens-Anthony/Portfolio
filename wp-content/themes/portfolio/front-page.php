<?php

get_header();


/*
Template Name: Home Page
*/


?>

    <main class="home" itemscope itemtype="https://schema.org/Person">
        <div>
            <h2 itemprop="jobTitle">
                <?= get_field('job') ?>
            </h2>
            <p class="name">
                <span itemprop="givenName">
                <?= get_field('firstname') ?>
                </span>
                <span itemprop="familyName">
                <?= get_field('lastname') ?>
                </span>
            </p>
            <p>
                <?= get_field('description') ?>
            </p>
            <a class="links " href="/projets"  title="Voir tous mes projets">
                <?= get_field('to_projects') ?>
            </a>
        </div>
        <img src="/wp-content/themes/portfolio/src/img/me.jpeg" alt="Photo de moi" id="me">
        <div class="rectangle"></div>
    </main>
<?php get_footer() ?>