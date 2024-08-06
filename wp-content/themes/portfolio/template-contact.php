<?php

$title = 'Contact';

include 'header.php';

/*
Template Name: Contact Page
*/

?>
<main class="contact">
    <h2>Contactez-moi</h2>
    <div>
        <section class="contact-information" itemscope itemtype="https://schema.org/Person">
            <h3 class="sr-only">Informations pour me joindre</h3>
            <p class="introducing-sentence">Avez-vous une question ou une demande particuli&egrave;re&nbsp;? Remplissez
                simplement le formulaire ci-contre ou
                utilisez les informations de contact fournies.</p>
            <div>
                <img id="phone" src="/wp-content/themes/portfolio/src/img/svg/SVG/telephone.svg" alt="Icôn de t&eacute;l&eacute;phone">
                <a href="tel:+32477810647" title="T&eacute;l&eacute;phonez moi" itemprop="telephone">0477.81.06.47</a>
            </div>
            <div>
                <img src="/wp-content/themes/portfolio/src/img/svg/SVG/letter.svg" id="letter" alt="Icôn d&apos;enveloppe">
                <a href="mailto:anthonycoppens04@gmail.com" title="Envoyez moi un mail" itemprop="email">anthonycoppens04@gmail.com</a>
            </div>
        </section>
        <section class="contact-form">
            <h3 class="sr-only">Formulaire de contact</h3>
            <form action="/wp-content/themes/portfolio/traitement.php" method="post">
                <div>
                    <label for="lastname">Nom <span class="second-color">*</span></label>
                    <input type="text" id="lastname" name="lastname" placeholder="Doe">
                </div>
                <div>
                    <label for="firstname">Pr&eacute;nom <span class="second-color">*</span></label>
                    <input type="text" id="firstname" name="firstname" placeholder="John">
                </div>

                <div>
                    <label for="email">Email <span class="second-color">*</span></label>
                    <input type="text" id="email" name="email" placeholder="john.doe@gmail.com">
                </div>

                <div>
                    <label for="subject">Sujet <span class="second-color">*</span></label>
                    <input type="text" id="subject" name="subject" placeholder="Prise de contact">
                </div>

                <div>
                    <label for="message">Message <span class="second-color">*</span></label>
                    <textarea id="message" name="message" placeholder="Renseignez votre message..."></textarea>
                </div>
                <button type="submit" title="Soumettre vos donn&eacute;es" name="submit">Envoyer</button>
            </form>
        </section>
    </div>
    <div class="rectangle"></div>
</main>
<?php include 'footer.php'; ?>