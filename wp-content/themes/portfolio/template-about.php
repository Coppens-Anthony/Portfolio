<?php

/*
Template Name: About Page
*/

$title = "À propos";

include 'header.php';

?>
<main class="about" itemscope itemtype="https://schema.org/Person">
    <h2>&Agrave; propos de moi</h2>
    <section class="introduction">
        <h3 class="sr-only">Petite introduction</h3>
        <img src="/wp-content/themes/portfolio/src/img/me.jpeg" id="me" alt="Photo de moi">
        <p>Bonjour, je suis <span itemprop="givenName" class="second-color">Anthony</span> <span class="second-color" itemprop="familyName">Coppens</span>, &eacute;tudiant en deuxi&egrave;me ann&eacute;e de <span
                class="second-color" itemprop="jobTitle">d&eacute;veloppement web</span> &agrave; l&apos;HEPL de Seraing. Je
            vous invite &agrave; d&eacute;couvrir mon <span class="second-color">portfolio</span>, o&ugrave; je pr&eacute;sente mes r&eacute;alisations
            vari&eacute;es dans les domaines de la
            conception graphique, du d&eacute;veloppement web et de l&apos;UX/UI design. Mon parcours acad&eacute;mique m&apos;a permis de
            d&eacute;velopper une expertise dans la cr&eacute;ation de sites internet responsifs, d&apos;applications web interactives et
            de prototypes fonctionnels.</p>
    </section>
    <section class="information">
        <h3 class="sr-only">Informations importantes</h3>
        <ul>
            <li>
                <article class="scolarity">
                    <h4>Mon parcours scolaire</h4>
                    <ul>
                        <li>
                            <article>
                                <h5>Bachelier en d&eacute;veloppement web</h5>
                                <p>
                                    <i>2022 - Aujourd&apos;hui</i>
                                </p>
                                <p class="description">
                                    Je suis actuellement &eacute;tudiant en d&eacute;veloppement web &agrave; la Haute &Eacute;cole de la Province
                                    de Li&egrave;ge. Ce bachelier me permet d&apos;acqu&eacute;rir des comp&eacute;tences approfondies en
                                    programmation, en design et en gestion de projets web, me pr&eacute;parant ainsi &agrave; une
                                    carri&egrave;re passionnante dans le domaine du num&eacute;rique.
                                </p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h5>Secondaires</h5>
                                <p>
                                    <i>2016 - 2022</i>
                                </p>
                                <p class="description">J&apos;ai effectu&eacute; mes &eacute;tudes secondaires au Coll&egrave;ge Sainte-Croix et
                                    Notre-Dame &agrave; Hannut, en section g&eacute;n&eacute;rale avec une sp&eacute;cialisation en sciences
                                    &eacute;conomiques. J&apos;ai &eacute;galement &eacute;tudi&eacute; l&apos;anglais et l&apos;espagnol, ce qui m&apos;a permis de
                                    d&eacute;velopper une base linguistique solide.</p>
                            </article>
                        </li>
                    </ul>
                </article>
            </li>
            <li>
                <article class="competencies">
                    <h4>Mes comp&eacute;tences</h4>
                    <ul>
                        <li>
                            <article>
                                <h5>UX/UI Design</h5>
                                <ul>
                                    <li>
                                        Adobe Illustrator
                                    </li>
                                    <li>
                                        Adobe Photoshop
                                    </li>
                                    <li>
                                        Adobe XD
                                    </li>
                                    <li>
                                        Figma
                                    </li>

                                </ul>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h5>Front-end</h5>
                                <ul>
                                    <li>
                                        HTML
                                    </li>
                                    <li>
                                        CSS
                                    </li>
                                    <li>
                                        SCSS
                                    </li>
                                    <li>
                                        JavaScript
                                    </li>
                                    <li>
                                        TypeScript
                                    </li>
                                </ul>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h5>Back-end</h5>
                                <ul>
                                    <li>
                                        PHP
                                    </li>
                                    <li>
                                        SQL
                                    </li>
                                </ul>
                            </article>
                        </li>
                    </ul>
                </article>
            </li>
        </ul>
    </section>
    <div class="rectangle"></div>
</main>
<?php include 'footer.php'; ?>