<?php

require_once "database.php";
//permet l'accès à la variable $pdo
$message="";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
//on vérifie si le formulaire a été soumis

    $user = trim($_POST['username']);
    $pass = $_POST['password'];
    //on récupère et on nettoie les données du formulaire

    if (!empty($user) && !empty($pass)) {
    //on vérifie que les champs ne sont pas vides !

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    //permet de hacher le mot de passe.

    try {
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (username, password) VALUES (:username, :password)");
        //on prépare la requête SQL pour insérer les données dans la table utilisateurs

        $stmt->execute([
            ':username' => $user,
            ':password' => $hashed_password
        ]);
        //on exécute en envoyant le pseudo et le mot de passé haché
        $message = "Inscription réussie !";
    } catch (PDOException $e) {
            $message = "Nom d'utilisateur déjà pris";
        }
        } else {
            $message = "<p>Veuillez remplir tous les champs.</p>";
        }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <p><?php echo $message; ?></p>

    <form action="inscription.php" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit">S'inscrire</button>
    </form>
    <p>Déjà inscrit ? <a href="login.php">Connectez-vous ici</a>.</p>
</body>
</html>