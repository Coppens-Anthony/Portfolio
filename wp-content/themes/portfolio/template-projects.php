<?php
/*
Template Name: Projects Page
*/

$title = 'Projets';

include 'header.php';
?>

<main class="projects">
    <h2>Mes projets</h2>
    <section>
        <h3 class="sr-only">Tous mes projets</h3>
        <ul>
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );

            $projects = new WP_Query($args);

            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post(); ?>

                    <li>
                        <article>
                            <h4><?php the_title(); ?></h4>
                            <a href="<?php the_permalink(); ?>" title="Consulter mon projet <?php the_title(); ?>">
                                <img class="mobile-projects" src="<?php echo esc_url(get_field('desktop_img')); ?>"
                                     alt="Maquette de mon <?php the_title(); ?>">
                                <img class="desktop-projects-color" src="<?php echo esc_url(get_field('color_img')); ?>"
                                     alt="Maquette de mon <?php the_title(); ?>">
                            </a>
                        </article>
                    </li>

                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p>Aucun projet trouvé.</p>
            <?php endif; ?>
        </ul>
    </section>
    <div class="rectangle"></div>

</main>

<?php include 'footer.php'; ?>
