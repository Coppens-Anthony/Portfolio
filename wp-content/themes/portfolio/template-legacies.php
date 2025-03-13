<?php

/*
Template Name: Legacies Page
*/


get_header();

?>
    <main class="legacies">
        <h2>
            <?= get_the_title() ?>
        </h2>
        <section class="legacies__container">
            <h3>
                &Eacute;diteur du site
            </h3>
            <?= get_field('editor') ?>
            <h3>
                H&eacute;bergement
            </h3>
            <?= get_field('hosting') ?>
            <h3>
                Propri&eacute;t&eacute; intellectuelle
            </h3>
            <?= get_field('intellectual_propriety') ?>
            <h3>
                Responsabilit&eacute;
            </h3>
            <?= get_field('responsability') ?>
            <h3>
                Protection des donn&eacute;es personnelles
            </h3>
            <?= get_field('data_protection') ?>
            <h3>
                Droit applicable et juridiction comp&eacute;tente
            </h3>
            <?= get_field('law') ?>

        </section>
        <div class="rectangle"></div>
    </main>
<?php
get_footer();
?>