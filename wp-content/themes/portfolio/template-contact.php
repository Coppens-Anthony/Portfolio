<?php
get_header();

/*
Template Name: Contact Page
*/

?>
    <main class="contact section">
        <?php
        $errors = $_SESSION['contact_form_errors'] ?? [];
        unset($_SESSION['contact_form_errors']);
        $success = $_SESSION['contact_form_success'] ?? false;
        unset($_SESSION['contact_form_success']);

        if ($success): ?>
            <div class="success-message animate">
                <p><?= $success; ?></p>
            </div>
        <?php endif; ?>
        <h2 class="animate">
            <?= get_field('title') ?>
        </h2>
        <div>
            <section class="contact-information animate" itemscope itemtype="https://schema.org/Person">
                <h3 class="sr-only">Informations pour me joindre</h3>
                <p class="introducing-sentence">
                    <?= get_field('description') ?>
                </p>
                <div>
                    <img id="phone" src="/wp-content/themes/portfolio/src/svg/telephone.svg"
                         alt="Icôn de t&eacute;l&eacute;phone">
                    <a href="tel:+32477810647" title="T&eacute;l&eacute;phonez moi" itemprop="telephone">
                        <?= get_field('telephone') ?>
                    </a>
                </div>
                <div>
                    <img src="/wp-content/themes/portfolio/src/svg/letter.svg" id="letter"
                         alt="Icôn d&apos;enveloppe">
                    <a href="mailto:anthonycoppens04@gmail.com" title="Envoyez moi un mail" itemprop="email">
                        <?= get_field('email') ?>
                    </a>
                </div>
            </section>
            <section class="contact-form">
                <h3 class="sr-only">Formulaire de contact</h3>
                <form action="<?= admin_url('admin-post.php'); ?>" method="post" class="animate">
                    <div>
                        <label for="lastname">Nom
                            <span class="second-color">*</span>
                            <?php if (isset($errors['lastname'])): ?>
                                <small class="error"><?= $errors['lastname']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="lastname" name="lastname" placeholder="Doe">
                    </div>
                    <div>
                        <label for="firstname">Pr&eacute;nom
                            <span class="second-color">*</span>
                            <?php if (isset($errors['firstname'])): ?>
                                <small class="error"><?= $errors['firstname']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="firstname" name="firstname" placeholder="John">
                    </div>

                    <div>
                        <label for="email">Email
                            <span class="second-color">*</span>
                            <?php if (isset($errors['email'])): ?>
                                <small class="error"><?= $errors['email']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="email" name="email" placeholder="john.doe@gmail.com">
                    </div>

                    <div>
                        <label for="subject">Sujet
                            <span class="second-color">*</span>
                            <?php if (isset($errors['subject'])): ?>
                                <small class="error"><?= $errors['subject']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="subject" name="subject" placeholder="Prise de contact">
                    </div>

                    <div>
                        <label for="message">Message
                            <span class="second-color">*</span>
                            <?php if (isset($errors['message'])): ?>
                                <small class="error"><?= $errors['message']; ?></small>
                            <?php endif; ?>
                        </label>
                        <textarea name="message" id="message" cols="30" rows="10"
                                  placeholder="Renseignez votre message..."></textarea>
                    </div>
                    <input type="hidden" name="action" value="dw_submit_contact_form">
                    <button type="submit" title="Soumettre vos donn&eacute;es" name="submit">Envoyer</button>
                </form>
            </section>
        </div>
    </main>
<?php get_footer(); ?>