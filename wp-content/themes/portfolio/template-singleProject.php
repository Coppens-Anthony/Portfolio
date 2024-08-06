<?php

/*
Template Name: Single project Page
*/

require_once 'Database.php';
$config = require 'config.php';

if (isset($_GET['id'])) {
    $projectID = (int) $_GET['id'];

    $db = new Database($config['database']);

    $query = "SELECT * FROM projects WHERE id = :id";
    $project = $db->query($query, [':id' => $projectID])->fetch();
}

$title = $project['title'] ;

include 'header.php';
?>


<main class="singleProject">
    <h2><?= $project['title'] ?></h2>
    <section class="project-description">
        <h3 class="sr-only">Informations sur le projet</h3>
        <article class="description">
            <div class="written-description">
                <h4>Description</h4>
                <p><?= $project['description'] ?></p>
                <div class="officials-links">
                    <a class="links" href="<?= $project['website_url'] ?>" title="Se rendre sur le site">Visiter le site</a>
                    <a class="links" href="<?= $project['github_url'] ?>" title="Se rendre sur le Github du site">Voir le Github</a>
                </div>
            </div>
            <img id="portfolio-img" src="<?= $project['desktop_img'] ?>" alt="Image du site">
        </article>
        <article class="fonctionnalities">
            <div class="written-fonctionnalities">
            <h4>Fonctionnalit&eacute;s</h4>
            <p><?= $project['fonctionnalities'] ?></p>
            </div>
            <div class="mini-img">
                <img src="<?= $project['mobile_img3'] ?>" alt="Image du site">
                <img src="<?= $project['mobile_img2'] ?>" alt="Image du site">
            </div>
            <img src="<?= $project['mobile_img1'] ?>" alt="Image du site">
        </article>
        <a class="links projects-link" href="/Projets" title="Retournez vers tous mes projets">Retour aux projets</a>
    </section>
    <div class="rectangle"></div>
</main>
<?php include 'footer.php'; ?>