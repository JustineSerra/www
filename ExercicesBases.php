<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - Bases de la programmation </title>
</head>
<body>

<?php

//1. Variables et affichage

//Exo 1.1
// $prenom = "Justine";
// echo "Bonjour, $prenom !";

//Exo 1.2
// $a = 5;
// $b = 8;
// $somme = $a + $b;
// echo "La somme de 5 et 8 est : $somme";

//Exo 1.3
// $prenom = "Justine";
// $nom = "Serra";
// $age = 28;
// echo "Je m'appelle $prenom $nom et j'ai $age ans.";

//2. Conditions 

//Exo 2.1
// $age = 28;
// if ($age >= 18) {
//     echo "Vous êtes majeur.";
// } else {
//     echo "Vous êtes mineur.";
// }

//Exo 2.2 
// $nombre = 15;
// if ($nombre % 2 == 0 ) {
//     echo "Le nombre est pair.";
// } else {
//     echo "Le nombre est impair.";
// }

//Exo 2.3 
// $note = 18;
// if ($note < 10) {
//     echo "Insuffisant";
// } elseif ($note >=10 && $note <=13 ) {
//     echo "Passable";
// } elseif  ($note  >=14 && $note<=16) {
//     echo "Bien";
// } else {
//     echo "Très bien";
// }

// 3. Boucles

//Exo 3.1 
// for ($i=1; $i<=10; $i++) {
//     echo $i;
// }

//Exo 3.2 
// $i=0;
// while ($i <=20) {
//     if ($i % 2 ==0) {
//         echo $i ."";
//     }
//     $i++;
// }

//Exo 3.3 
// $n = 5;
// for ($i=1; $i<=10; $i++) {
//     $resultat = $n*$i;
//     echo "$n x $i = $resultat\n";
// }

//4. Debogage avec var_dump

//Exo 4.1
// $nombre1 = 5;
// $nombre2 = 3;
// $somme = $nombre1 + $nombre2;
// echo "La somme est : $somme";

// var_dump($nombre1);
// var_dump($nombre2);
// var_dump($somme);

//Exo 4.2
// $age = 18;
// if($age == 21) {
//  echo "Vous avez 21 ans.";
// } else {
//  echo "Vous n'avez pas 21 ans.";
// }
// var_dump($age);

//5. Exercices d'application

//Exo 5.1

?>

    
</body>
</html>