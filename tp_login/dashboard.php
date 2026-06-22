<?php
session_start();

if(!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
//vérif de sécurité , si la session n'existe pas, on redirige vers la page de login
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Tableau de bord</h1>
    <p>Bienvenue, <?php echo htmlspecialchars($_SESSION["user"]); ?> !</p>
    <!-- La fonction htmlspecialchars sert à protéger le site contre les attaques XSS. -->
    <button><a href="logout.php">Se déconnecter</a></button>
    <p><a href="list_users.php">Accéder à la gestion des utilisateurs</a></p>
</body>
</html>