<?php

/*
Template Name: About Page
*/


get_header();

?>
    <main class="about section" itemscope itemtype="https://schema.org/Person">
        <h2 class="animate">
            <?= get_field('title') ?>
        </h2>
        <div class="introduction__container animate">
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
            <div class="img__container">
                <?= wp_get_attachment_image(get_field('me_img'), 'medium'); ?>
            </div>
        </div>


        <section class="competencies animate">
            <h3>Mes compétences</h3>
            <div class="highway-slider">
                <?php if (have_rows('competencies_slider')):
                    $items = [];
                    while (have_rows('competencies_slider')): the_row();
                        $items[] = [
                            'image' => get_sub_field('image'),
                            'alt' => get_sub_field('image_alt')
                        ];
                    endwhile; ?>
                    <ul class="highway-lane">
                        <?php for ($i = 0; $i < 6; $i++):
                            foreach ($items as $item): ?>
                                <li class="highway-card">
                                    <img src="<?= $item['image'] ?>" alt="<?= $item['alt'] ?>">
                                </li>
                            <?php endforeach; endfor; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </section>

        <section class="scholar">
            <h3 class="animate">Mon parcours scolaire</h3>
            <div>
                <?php if (have_rows('scholar')): ?>
                    <ol class="scholar_container">
                        <?php while (have_rows('scholar')): the_row(); ?>
                            <li class="scholar_item">
                                <article>
                                    <p><?= get_sub_field('starting') ?>-<?= get_sub_field('ending') ?></p>
                                    <h4><?= get_sub_field('title') ?></h4>
                                    <small><?= get_sub_field('description') ?></small>
                                </article>
                            </li>
                        <?php endwhile; ?>
                    </ol>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php
get_footer();
?>