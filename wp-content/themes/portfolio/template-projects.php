<?php

/*
Template Name: Projects Page
*/


get_header();

?>
    <main class="projects section">
        <h2 class="animate">
            <?= get_field('title') ?>
        </h2>
        <section class="projects__container animate">
            <h3 class="sr-only">Liste de mes projets</h3>
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'order' => 'DESC',
                'orderby' => 'date',
            ]);

            if ($projects->have_posts()): ?>
                <ul>
                    <?php while ($projects->have_posts()): $projects->the_post(); ?>
                        <li>
                            <article class="animate">
                                <a href="<?= get_the_permalink(); ?>"
                                   title='Consulter le projet "<?= get_the_title(); ?>"'>
                                    <span class="sr-only">Découvrir le projet "<?= get_the_title(); ?>"</span>
                                </a>
                                <div class="img_container">
                                    <?= wp_get_attachment_image(get_field('cover_img'), 'large'); ?>
                                </div>
                                <h4><?= get_the_title(); ?></h4>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>Je n'ai pas de projets à montrer pour le moment...</p>
            <?php endif; ?>
        </section>
    </main>
<?php
get_footer();
?>