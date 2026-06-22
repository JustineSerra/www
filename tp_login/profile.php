<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once 'database.php';

$infos_user = null;

if(isset($_GET['id']) && !empty($_GET['id'])) {
    //on vérifie qu'on a reçu l'ID dans l'URL
    $id = (int)$_GET['id'];
    //l'ID doit être un nombre entier donc on le force

    try {
        $stmt = $pdo->prepare('SELECT username FROM utilisateurs WHERE id =?');
        $stmt->execute([$id]);
        $infos_user = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur SQL: " . $e->getMessage());
    }
    //on récupère le pseudo lié à l'ID
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
</head>
<body>
    <h1>Profil Public</h1>
    <p><a href="list_users.php"> Retour à la liste</a></p>

    <?php if ($infos_user) : ?>
        <h2>Profil de : <?php echo htmlspecialchars($infos_user['username']); ?>
        </h2>
        <p> ID unique en BDD : <?php echo $id; ?></p>
        <?php else:?>
            <p style = "color:red; font-weight:bold;">Utilisateur introuvable.</p>
        <?php endif;?>
    
</body>
</html>