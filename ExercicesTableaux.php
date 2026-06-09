<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - Tableaux (indexés et associatifs) </title>
</head>
<body>
<?php 
// Partie 1 : Tableaux indexés (ordonnés)

//Exercice 1.1 
// $fruits = ["pomme", "banane", "orange"];
// foreach($fruits as $fruit) { //passe en revue le tableau $fruits, fruit en cours stocké dans la variable $fruit
//     echo $fruit ."<br>";
// }

//Exercice 1.2
// $fruits = ["pomme", "banane", "orange"];
// echo "Premier fruit : " . $fruits[0] . "<br>"; //l'index commence toujours par 0
// echo "Dernier fruit : " . $fruits[2] . "<br>";

//Exercice 1.3
// $fruits = ["pomme", "banane", "orange"];
// $fruits[] = "kiwi"; // [] = permet d'ajouter des nouveaux éléments à la fin du tableau
// $fruits[] = "ananas"; 
// foreach ($fruits as $fruit) {
//     echo $fruit . "<br>";
// }

//Exercice 1.4
// $fruits = ["pomme", "banane", "orange"];
// $nombreDeFruits = count($fruits);
// echo "Nombre total d'éléments contenus dans le tableau : $nombreDeFruits ";

//Partie 2 : Tableaux associatifs 

//Exercice 2.1
// $personne = [
//     "nom" => "Durand", //on utilise => en PHP pour afficher la clé à sa valeur
//     "prenom" => "Alice",
//     "age" => 28
// ];
// echo "{$personne["prenom"]} {$personne["nom"]} a {$personne["age"]} ans.";

//Exercice 2.2 
// $personne = [
//     "nom" => "Durand",
//     "prenom" => "Alice",
//     "age" => 28
// ];
// foreach ($personne as $cle => $valeur) {
//     echo $cle . " : " . $valeur . "<br>";
// }

//Exercice 2.3




?>
    
</body>
</html>