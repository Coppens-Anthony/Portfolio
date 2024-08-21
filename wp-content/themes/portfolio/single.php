<?php


$title = get_the_title();

include 'header.php';

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <main class="singleProject">
            <h2><?php the_title(); ?></h2>
            <section class="project-description">
                <h3 class="sr-only">Informations sur le projet</h3>
                <article class="description">
                    <div class="written-description">
                        <h4>Description</h4>
                        <p><?php echo esc_html(get_field('description')); ?></p>
                        <div class="officials-links">
                            <a class="links" href="<?php echo esc_url(get_field('website_url')); ?>" title="Se rendre sur le site">Visiter le site</a>
                            <a class="links" href="<?php echo esc_url(get_field('github_url')); ?>" title="Se rendre sur le Github du site">Voir le Github</a>
                        </div>
                    </div>
                    <img id="portfolio-img" src="<?php echo esc_url(get_field('desktop_img')); ?>" alt="Image du site">
                </article>
                <article class="fonctionnalities">
                    <div class="written-fonctionnalities">
                        <h4>Fonctionnalités</h4>
                        <p><?php echo esc_html(get_field('fonctionnalities')); ?></p>
                    </div>
                    <div class="mini-img">
                        <img src="<?php echo esc_url(get_field('mobile_img3')); ?>" alt="Image du site">
                        <img src="<?php echo esc_url(get_field('mobile_img2')); ?>" alt="Image du site">
                    </div>
                    <img src="<?php echo esc_url(get_field('mobile_img1')); ?>" alt="Image du site">
                </article>
                <a class="links projects-link" href="<?php echo esc_url(site_url('/Projets')); ?>" title="Retournez vers tous mes projets">Retour aux projets</a>
            </section>
            <div class="rectangle"></div>
        </main>

    <?php endwhile;
endif;

include 'footer.php';
