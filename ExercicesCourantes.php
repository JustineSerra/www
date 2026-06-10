<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP : Fonctions courantes</title>
</head>
<body>
<?php 

//1.Fonctions sur les chaînes de caractères

//Exercice 1.1
// $texte = "Salut à tous c'est Squeezie";
// echo strLen($texte);

//Exercice 1.2
// $texte = "test d'une phrase";
// echo strtoupper($texte);
// echo "<br>";
// echo strtolower($texte);

//Exercice 1.3
// $phrase = "Je fais actuellement du PHP";
// $motRecherche="PHP";
// $position = strpos($phrase, $motRecherche);
// if ($position !== false){
//     echo "Le mot $motRecherche a été trouvé. Il commence à la position : $position.";
// } else {
//     echo "Le mot $motRecherche n'a pas été trouvé dans la phrase.";
// }

//Exercice 1.4
// $phrase = "Se lever le matin c'est difficile";
// $nouvellePhrase = str_replace("difficile", "facile", $phrase);

// echo $nouvellePhrase;

// 2. Fonctions sur les nombres

//Exercice 2.1
// $nombre = 4.56;
// echo round($nombre);
// echo "<br>";
// echo floor($nombre);
// echo "<br>";
// echo ceil($nombre);

//Exercice 2.2
// $number=rand(1,100);
// echo $number;

//Exercice 2.3
// $prix = 1234.5635;
// $prixDecimale = number_format($prix, 2, ",", "");
// echo "le prix en decimale est $prixDecimale €";

//3. Fonctions sur les booléens 

//Exercice 3.1
// $valeur = 0;
// if (empty($valeur)) {
//     echo "La variable est vide";
// } else {
//     echo "La variable contient une valeur.";
// }

//Exercice 3.2
// if(isset($nom)) {
//     echo "La variable nom existe";
// } else {
//     echo "La variable nom n'est pas définie";
// }

//Exercice 3.3
// $chaineNonVide="Salut";
// $zero = 0;
// $un=1;
// $chaineVide="";

// echo 'Variable $chaineNonVide("Salut")';
// var_dump((bool)$chaineNonVide);
// echo "<br>";

// echo 'Variable $zero(0)';
// var_dump((bool)$zero);
// echo "<br>";

// echo 'Variable $un(1)';
// var_dump((bool)$un);
// echo "<br>";

// echo 'Variable $chaineVide("")';
// var_dump((bool)$chaineVide);

//4. Fonctions sur les tableaux

//Exercice 4.1
// $prenom = [
//     "Justine",
//     "François",
//     "Assia",
//     "Aurélien",
//     "Thomas"
// ];
// echo count($prenom);

//Exercice 4.2
// $prenom = [
//     "Justine",
//     "François",
//     "Assia",    
//     "Aurélien",
//     "Thomas"
// ];
// array_push($prenom,"Luc"); //array_push ajoute un élément au tableau
// echo "Après l'ajout du prénom Luc:";
// print_r($prenom); //print_r affiche le contenu du tableau avec les valeurs
// echo "<br>";

// array_pop($prenom); //array_pop supprime le dernier élément du tableauS
// echo "Après avoir supprimé le prénom Luc:"; 
// print_r($prenom); 

//Exercice 4.3
// $prenom = [
//     "Justine",     
//     "François",
//     "Assia",   
//     "Aurélien",
//     "Thomas"
// ];
// sort($prenom); //trie le tableau par ordre alphabétique croissant et réindexe à partir de 0
// echo "<pre>"; //conserve la mise en forme du texte
// print_r($prenom); //affiche le contenu du tableau
// echo "</pre>";

//Exercice 4.4
// $prenom = [
//     "Justine",    
//     "François",
//     "Assia",   
//     "Aurélien",
//     "Thomas"
// ];
// if (in_array("Marie",$prenom)) {
//     echo "Le prénom Marie est présent dans le tableau";
// } else {
//     echo "Le prénom Marie n'est pas présent dans le tableau";
// }

?>
    
</body>
</html>