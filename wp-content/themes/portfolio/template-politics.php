<?php

/*
Template Name: Politics Page
*/


get_header();

?>
    <main class="legacies section">
        <h2 class="animate">
            <?= get_the_title() ?>
        </h2>
        <section class="legacies__container">
            <article class="animate">
                <h3>
                    &Eacute;diteur du site
                </h3>
                <?= get_field('editor') ?>
            </article>

            <article class="animate">
                <h3>
                    H&eacute;bergement
                </h3>
                <?= get_field('hosting') ?>
            </article>

            <article class="animate">
                <h3>
                    Propri&eacute;t&eacute; intellectuelle
                </h3>
                <?= get_field('intellectual_propriety') ?>
            </article>

            <article class="animate">
                <h3>
                    Responsabilit&eacute;
                </h3>
                <?= get_field('responsability') ?>
            </article>

            <article class="animate">
                <h3>
                    Protection des donn&eacute;es personnelles
                </h3>
                <?= get_field('data_protection') ?>
            </article>

            <article class="animate">
                <h3>
                    Droit applicable et juridiction comp&eacute;tente
                </h3>
                <?= get_field('law') ?>
            </article>
        </section>
    </main>
<?php
get_footer();
?>