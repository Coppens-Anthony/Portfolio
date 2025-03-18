<?php

get_header();


/*
Template Name: Home Page
*/


?>

    <main class="home" itemscope itemtype="https://schema.org/Person">
        <section>
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
        </section>
        <div class="img__container">
            <?= wp_get_attachment_image(get_field('me_img'), 'medium'); ?>
        </div>
        <div class="rectangle"></div>
    </main>
<?php get_footer() ?>