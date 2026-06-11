<?php 
include 'includes/header.php';
include 'includes/menu.php';

$astuces = [
    "Pour des pâtes parfaites" => "Comptez toujours 1 litre d'eau pour 100g de pâtes et 10g de sel.",
    "Réussir la cuisson du poulet" => "Arrosez votre poulet avec son propre jus toutes les 20 minutes."
];
?>

<h2>Astuces culinaires</h2>

<ul>
    <?php
    foreach($astuces as $astuce) {
        echo "<li>$astuce</li>";
    }
    ?>
</ul>

<?php
include "includes/footer.php"
?>