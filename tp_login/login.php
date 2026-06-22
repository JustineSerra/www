<?php
session_start();

require_once "database.php";
$error="";
//on inclut la connexion à la base de données

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);
//on vérifie si les champs sont remplis

    if(!empty($user) && !empty($pass)) {
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = :username");
        $stmt->execute(['username' => $user]);
        $compte=$stmt->fetch(PDO::FETCH_ASSOC);
        //on cherche si le pseudo existe dans la base de données

        if($compte && password_verify($pass, $compte['password'])) {
            //vérification du mot de passe avec password_verify pour la sécurité
            $_SESSION['user'] = $compte['username'];
            $_SESSION['user_id'] = $compte['id'];

            header("Location: dashboard.php");
            exit();
            //si les informations sont correctes, on redirige l'utilisateur vers le dashboard


        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
            //sinon note de message d'erreur pour l'utilisateur
        }
    } else {
        $error = "Veuillez remplir tous les champs.";
        //si les champs ne sont pas remplis, on note un message d'erreur pour l'utilisateur
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
    <h2>Connexion</h2>
    <?php if(!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <!-- S'il existe une erreur, alors elle sera affichée en rouge -->

    <form action="login.php" method="POST">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>

    <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a>.</p>
    <!-- Lien vers la page d'inscription pour les nouveaux utilisateurs -->
    
</body>
</html>