<?php

require_once "data/recettes.php";

include "includes/header.php";
include "includes/menu.php";

//On récupère ce qu'il y a dans l'URL
$id = $_GET["id"] ?? null; //?? null = si id n'existe pas ça met null

//sécurité
if ($id === null || !isset($recettes[$id])) {
    echo "<h2>Recette introuvable</h2>"; //si erreur ça affiche ce message
    include "includes/footer.php";
    exit; //stop le script
}

//récupération de la recette avec son id
$recette=$recettes[$id];
?>

<!-- on recupère le titre de la recette -->
<h2><?= $recette["titre"] ?></h2>

<!-- puis le temps et la difficulté -->
<p><strong>Temps :</strong> <?= $recette["temps"] ?></p>
<p><strong>Difficulté :</strong> <?= $recette["difficulte"] ?></p>

<!-- et les ingrédients (avec une boucle car les ingrédients c'est un tableau) -->
<h3>Ingrédients : </h3>
<ul>
<?php foreach ($recette["ingredients"] as $ingredient): ?>
    <li><?= $ingredient ?></li>
<?php endforeach; ?>
</ul>

<?php
include "includes/footer.php";
?>