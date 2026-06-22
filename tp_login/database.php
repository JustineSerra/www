<?php
$host = "localhost";
$dbname = "tp_login";
$username = "root";
$password = "";
//coordonnées du serveur de base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    //objet "PDO" qui représente un  tunnel sécurisé entre le serveur web et le serveur de base de données.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //s'il y a une erreur dans la requête SQL, on coupe tout et on affiche un message d'erreur.
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
// si la connexion échoue, on affiche un message d'erreur et on arrête l'exécution du script.

?>