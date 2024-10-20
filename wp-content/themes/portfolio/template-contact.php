<?php

$title = 'Contact';


session_start(); // Démarrer la session pour récupérer les erreurs et les messages de succès
$errors = $_SESSION['form_errors'] ?? [];
$data = $_SESSION['form_data'] ?? []; // Récupérer les données de la session
$successMessage = $_SESSION['form_success'] ?? ''; // Récupérer le message de succès
unset($_SESSION['form_errors']); // Supprimer les erreurs après les avoir récupérées
unset($_SESSION['form_data']); // Supprimer les données après les avoir récupérées
unset($_SESSION['form_success']); // Supprimer le message de succès après l'avoir récupéré

include 'header.php';

/*
Template Name: Contact Page
*/

?>
    <main class="contact">
        <?php if ($successMessage): ?>
            <small class="success-message"><?php echo $successMessage; ?></small>
        <?php endif; ?>
        <h2>Contactez-moi</h2>
        <div>
            <section class="contact-information" itemscope itemtype="https://schema.org/Person">
                <h3 class="sr-only">Informations pour me joindre</h3>
                <p class="introducing-sentence">Avez-vous une question ou une demande particuli&egrave;re&nbsp;?
                    Remplissez
                    simplement le formulaire ci-contre ou
                    utilisez les informations de contact fournies.</p>
                <div>
                    <img id="phone" src="/wp-content/themes/portfolio/src/img/svg/SVG/telephone.svg"
                         alt="Icôn de t&eacute;l&eacute;phone">
                    <a href="tel:+32477810647" title="T&eacute;l&eacute;phonez moi"
                       itemprop="telephone">0477.81.06.47</a>
                </div>
                <div>
                    <img src="/wp-content/themes/portfolio/src/img/svg/SVG/letter.svg" id="letter"
                         alt="Icôn d&apos;enveloppe">
                    <a href="mailto:anthonycoppens04@gmail.com" title="Envoyez moi un mail" itemprop="email">anthonycoppens04@gmail.com</a>
                </div>
            </section>
            <section class="contact-form">
                <h3 class="sr-only">Formulaire de contact</h3>
                <form action="/wp-content/themes/portfolio/traitement.php" method="post">
                    <div>
                        <label for="lastname">Nom
                            <span class="second-color">*</span>
                            <?php if (!empty($errors['lastname'])): ?>
                                <small class="error"><?php echo $errors['lastname']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="lastname" name="lastname" placeholder="Doe"
                               value="<?php echo htmlspecialchars($data['lastname'] ?? ''); ?>">
                    </div>
                    <div>
                        <label for="firstname">Pr&eacute;nom
                            <span class="second-color">*</span>
                            <?php if (!empty($errors['firstname'])): ?>
                                <small class="error"><?php echo $errors['firstname']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="firstname" name="firstname" placeholder="John"
                               value="<?php echo htmlspecialchars($data['firstname'] ?? ''); ?>">
                    </div>

                    <div>
                        <label for="email">Email
                            <span class="second-color">*</span>
                            <?php if (!empty($errors['email'])): ?>
                                <small class="error"><?php echo $errors['email']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="email" name="email" placeholder="john.doe@gmail.com"
                               value="<?php echo htmlspecialchars($data['email'] ?? ''); ?>">
                    </div>

                    <div>
                        <label for="subject">Sujet
                            <span class="second-color">*</span>
                            <?php if (!empty($errors['subject'])): ?>
                                <small class="error"><?php echo $errors['subject']; ?></small>
                            <?php endif; ?>
                        </label>
                        <input type="text" id="subject" name="subject" placeholder="Prise de contact"
                               value="<?php echo htmlspecialchars($data['subject'] ?? ''); ?>">
                    </div>

                    <div>
                        <label for="message">Message
                            <span class="second-color">*</span>
                            <?php if (!empty($errors['message'])): ?>
                                <small class="error"><?php echo $errors['message']; ?></small>
                            <?php endif; ?>
                        </label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Renseignez votre message..." value="<?php echo htmlspecialchars($data['message'] ?? ''); ?>"></textarea>
                    </div>
                    <button type="submit" title="Soumettre vos donn&eacute;es" name="submit">Envoyer</button>
                </form>
            </section>
        </div>
        <div class="rectangle"></div>
    </main>
<?php include 'footer.php'; ?>