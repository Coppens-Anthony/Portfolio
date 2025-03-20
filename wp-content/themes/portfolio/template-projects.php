<?php

/*
Template Name: Projects Page
*/


get_header();

?>
    <main class="projects section">
        <h2>
            <?= get_field('title') ?>
        </h2>
        <section class="projects__container">
            <h3 class="sr-only">Liste de mes projets</h3>
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'order' => 'DESC',
                'orderby' => 'date',
            ]);

            if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); ?>
                <article>
                    <a href="<?= get_the_permalink(); ?>" title="Consulter le projet">
                        <span class="sr-only">Découvrir le projet "<?= get_the_title(); ?>"</span>
                    </a>
                    <div class="img_container">
                        <?= wp_get_attachment_image(get_field('cover_img'), 'medium'); ?>
                    </div>
                    <section>
                        <h4>
                            <?= get_field('title') ?>
                        </h4>
                        <p>
                            <?= get_field('introduction_description') ?>
                        </p>
                        <?php if (have_rows('languages')): ?>
                            <ul>
                                <?php while (have_rows('languages')): the_row(); ?>
                                    <li>
                                        <?= get_sub_field('language') ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </section>
                </article>
            <?php endwhile; else: ?>
                <p>Je n'ai pas de projets à montrer pour le moment...</p>
            <?php endif; ?>
        </section>
        <div class="rectangle"></div>
    </main>
<?php
get_footer();
?>