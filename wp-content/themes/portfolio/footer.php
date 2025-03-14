<footer>
    <article class="footer-list">
        <h2 class="sr-only">Footer</h2>
        <nav class="footer_nav">
            <h3>Navigation <span class="hidden">secondaire</span></h3>
            <ul>
                <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                    <li>
                        <a href="<?= $link->href; ?>" title="Vers la page <?= $link->label ?>">
                            <?= $link->label; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <section class="coords" itemscope itemtype="https://schema.org/Person">
            <h3>Coordonn&eacute;es</h3>
            <ul>
                <li itemprop="email">
                    <a href="mailto:anthonycoppens04@gmail.com" title="Envoyez moi un mail">anthonycoppens04@gmail.com</a>
                </li>
                <li itemprop="telephone">
                    <a href="tel:+32477810647" title="Téléphonez moi" itemprop="telephone">0477.81.06.47</a>
                </li>
                <li itemprop="address">Rue Henri Collin 21,</li>
                <li itemprop="address">1350, Orp-Le-Grand</li>
            </ul>
        </section>
        <section class="socials">
            <h3>Mes r&eacute;seaux</h3>
            <ul>
                <li>
                    <a href="https://github.com/Coppens-Anthony" title="Vers mon compte Github">Github</a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/anthony-coppens-8ba3832a7/"
                       title="Vers mon compte LinkedIn">LinkedIn</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/anthony_coppens/?hl=fr"
                       title="Vers mon compte Instagram">Instagram</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/anthony.coppens.04/?locale=fr_FR"
                       title="Vers mon compte Facebook">Facebook</a>
                </li>
            </ul>
        </section>
    </article>
    <article class="legal">
        <h2 class="sr-only">Mentions légales</h2>
        <small>© 2025 Anthony Coppens - Tous droits réservés.</small>
        <small>
            <a href="/mentions-legales" title="Se renseigner sur le smentions légales">Mentions légales</a>
        </small>
    </article>
</footer>
</body>
</html>