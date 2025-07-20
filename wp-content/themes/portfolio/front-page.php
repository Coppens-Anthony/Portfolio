<?php

/*
Template Name: Home Page
*/

get_header();
?>

    <main class="home section" itemscope itemtype="https://schema.org/Person">
        <section class="intro">
            <div class="animate">
                <p class="name">
                    <span itemprop="givenName">
                    <?= get_field('firstname') ?>
                    </span>
                        <span itemprop="familyName">
                    <?= get_field('lastname') ?>
                    </span>
                </p>
                <h2 itemprop="jobTitle">
                    <?= get_field('job') ?>
                </h2>
                <p>
                    <?= get_field('description') ?>
                </p>
                <a class="links " href="/projets" title="Voir tous mes projets">
                    <?= get_field('to_projects') ?>
                </a>
            </div>
            <div class="img__container animate">
                <?= wp_get_attachment_image(get_field('me_img'), 'medium'); ?>
            </div>
        </section>
        <section class="projects__container animate">
            <h2>Mes derniers projets</h2>
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 3,
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
                                <h3><?= get_the_title(); ?></h3>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>Je n'ai pas de projets à montrer pour le moment...</p>
            <?php endif; ?>
        </section>
    </main>
<?php get_footer() ?>