<?php

/*
Template Name: Projects Page
*/


require_once 'Database.php';
$config = require 'config.php';

$db = new Database($config['database']);

$projects = $db->query("SELECT * FROM projects")->fetchAll();

$title = "Projets";

include 'header.php';
?>
    <main class="projects">
    <h2>Mes projets</h2>
    <section>
    <h3 class="sr-only">Tous mes projets</h3>
    <ul>
<?php foreach ($projects as $project): ?>
    <li>
        <article>
            <h4><?= $project['title'] ?></h4>
            <a href="/Projet?id=<?= $project['id'] ?>" title="Voir mon projet client">
                <img class="mobile-projects" src="<?= $project['desktop_img'] ?>"
                     alt="Image de mon <?= $project['title'] ?>">
                <img class="desktop-projects-color" src="<?= $project['color_img'] ?>"
                     alt="Image de mon <?= $project['title'] ?>">
                <img class="desktop-projects" src="<?= $project['black_white_img'] ?>"
                     alt="Image de mon <?= $project['title'] ?>">
            </a>
        </article>
    </li>
<?php endforeach; ?>
    </ul>
    </section>
    <div class="rectangle"></div>

    </main>
    <?php include 'footer.php'; ?>