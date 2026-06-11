<?php 
require_once "data/recettes.php";

include "includes/header.php";
include "includes/menu.php";
?>

<h2>Liste des recettes : </h2>

<?php 
foreach($recettes as $index => $recette) {
    echo "<h3><a href='recette.php?id=$index'>" . $recette["titre"] . "</a></h3>";
    //en cliquant sur le titre de la recette, ça envoie vers une nouvelle page avec un index de 0 à 3 car 4 recettes
}
?>

<?php
include "includes/footer.php";
?>