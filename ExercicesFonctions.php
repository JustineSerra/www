<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP - Les fonctions </title>
</head>
<body>
<?php
//1. Fonctions sans paramètre

//Exercice 1.1
// function saluer() {
//     echo "Bonjour et bienvenue <br>";
// }
// saluer();
// saluer();

//Exercice 1.2
// function ligne() {
//     echo "---------------- <br>";
// }
// ligne ();
// echo "Bonjour et bienvenue ! <br>";
// ligne ();

//2. Fonctions avec paramètres

//Exercice 2.1
// function direBonjour($prenom) {
//     echo "Bonjour, $prenom <br>";
// }
// direBonjour("Justine");
// direBonjour("François");
// direBonjour("Assia");

//Exercice 2.2
// function multiplier($a, $b) {
//     $resultat = $a*$b;
//     echo "Le produit de $a et $b est : $resultat <br>";
// }
// multiplier(5,8);
// multiplier(15,20);
// multiplier(3,17);

//3. Fonctions avec valeur de retour 

//Exercice 3.1
// function carre($nombre) {
//     return $nombre*$nombre;
// }
// $resultatCalcul=carre(5);
// echo "Le carré du nombre est : $resultatCalcul";

//Exercice 3.2
// function anneeNaissance($age) {
//     $anneeActuelle = 2025;
//     return $anneeActuelle - $age;
// }
// $ageActuel= 30;
// $anneeCalculee=anneeNaissance($ageActuel);
// echo "Si vous avez $ageActuel ans, vous êtes né en $anneeCalculee";

//4. Fonctions conditionnelles 

//Exercice 4.1
// function estMajeur($age) {
//     if ($age >= 18) {
//         return true;
//     } else {
//         return false;
//     }
// }
// $age= 10;
// if (estMajeur($age)) {
//     echo "Vous êtes majeur.";
// } else {
//     echo "Vous êtes mineur.";
// }

//Exercice 4.2
// function estPair($nombre) {
//     if ($nombre %2 ===0) {
//         return true;
//     } else {
//         return false;
//     }
// }
// $nombreTest = 15;
// if (estPair($nombreTest)) {
//     echo "Le nombre $nombreTest est pair.";
// } else {
//     echo "Le nombre $nombreTest est impair."; 
// }

//5. Exercices d'application 

//Exercice 5.1
// function presentation($prenom,$nom,$age) {
//     return "Je m'appelle $prenom $nom et j'ai $age ans.";
// }
// echo presentation ("Alain", "Dupont", 32);

//Exercice 5.2
// function calculer($a, $b, $operation) {
//     switch($operation) {
//         case '+' : 
//             return $a + $b;
//         case '-' : 
//             return $a - $b;
//         case '*' :
//             return $a * $b;
//         case '/' :
//             if ($b==0) {
//                 return "Erreur:Division par zéro impossible.";
//             }
//             return $a/$b;
//         default:
//         return "Erreur: Opération '$operation' inconnue.";
//     }
// }
// echo calculer(5,3, '+');


//Exercice 5.3
// function afficherLigne($n) {
//     for ($i=1; $i<=$n; $i++) {
//         echo "Ligne $i <br>";
//     }
// }
// afficherLigne(3);


?>
    
</body>
</html>