<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="singleProject section">
        <h2 class="animate">
            <?= get_field('title') ?>
        </h2>
        <section class="general_content description animate">
            <div class="content_container">
                <h3>
                    <?= get_field('first_description_title') ?>
                </h3>
                <?= get_field('first_text') ?>
                <div class="links_container">
                    <a href="<?= get_field('website_url') ?>" title="Se rendre sur le site du projet">
                        <?= get_field('website_button_text') ?>
                    </a>
                    <a href="<?= get_field('github_url') ?>" title="Se rendre sur le Github du projet">
                        <?= get_field('github_button_text') ?>
                    </a>
                </div>
            </div>
            <div class="img_container">
                <?= wp_get_attachment_image(get_field('description_img'), 'desc'); ?>
            </div>
        </section>
        <section class="general_content functionalities animate">
            <div class="img_container">
                <?= wp_get_attachment_image(get_field('full_img'), 'medium_large'); ?>
            </div>
            <div class="functionalities_container">
                <h3>
                    <?= get_field('second_description_title') ?>
                </h3>
                <?= get_field('second_text') ?>
            </div>
        </section>
        <a href="<?= get_post_type_archive_link('project') ?>" title="Retourner à la page des projets"
           class="return_to_projects animate">Retour aux projets</a>
    </main>

<?php endwhile; else: ?>
    <p>Ce projet n'existe pas.</p>
<?php endif;

get_footer();
?>
