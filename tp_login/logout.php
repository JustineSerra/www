<?php
session_start();

$_SESSION = array();
//on vide le tableau de la session

session_destroy();
//on détruit la session côté serveur

header("Location: login.php");
exit;
//redirige vers la page de connexion

?>