<?php 
require_once "data/recettes.php";

include "includes/header.php";
include "includes/menu.php";
?>

<h2>Liste des recettes : </h2>

<?php 
foreach($recettes as $recette) {
    echo "<h3>" . $recette["titre"] . "</h3>";
    echo "<p>Temps : " . $recette["temps"] . "</p>";
    echo "<p>Difficulté : " . $recette["difficulte"] ."</p>";

    echo "<p>Ingrédients : </p>";
    echo "<ul>";
        
    foreach($recette["ingredients"] as $ingredient) {
        echo "<li>" . $ingredient . "</li>";
    }

    echo "</ul>";
}
?>

<?php
include "includes/footer.php";
?>