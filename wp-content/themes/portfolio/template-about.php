<?php

/*
Template Name: About Page
*/


get_header();

?>
    <main class="about" itemscope itemtype="https://schema.org/Person">
        <h2>
            <?= get_field('title') ?>
        </h2>
        <div class="introduction__container">
            <section>
                <h3 class="sr-only">Description</h3>
                <article>
                    <h4>
                        <?= get_field('first_title') ?>
                    </h4>
                    <p>
                        <?= get_field('first_paragraph') ?>
                    </p>
                </article>
                <article>
                    <h4>
                        <?= get_field('second_title') ?>
                    </h4>
                    <p>
                        <?= get_field('second_paragraph') ?>
                    </p>
                </article>
            </section>
            <!--IMAGE-->
        </div>
        <section class="competencies">
            <h3 class="sr-only">
                Mes compétences
            </h3>
            <div class="highway-slider">
                <?php if (have_rows('competencies_slider')): ?>
                    <ul class="highway-lane">
                        <?php while (have_rows('competencies_slider')): the_row(); ?>
                            <li class="highway-card">
                                <img src="<?= get_sub_field('image') ?>" alt="<?= get_sub_field('image_alt') ?>">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>
        <div class="rectangle"></div>
    </main>
<?php
get_footer();
?>