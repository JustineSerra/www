<?php 
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}

require_once 'database.php';

try {
    $stmt=$pdo->query('SELECT id, username FROM utilisateurs');
    $users=$stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de récupération : " . $e->getMessage());
}
//on récupère l'ID et le pseudo de tous les utilisateurs inscrits
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
<style>
        table { width: 60%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .success { padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; margin-bottom: 15px; }
        .error { padding: 10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; margin-bottom: 15px; }
    </style>
</head>
<body>
    <h1>Gestion des utilisateurs</h1>
    <p><a href="dashboard.php">Retour au Tableau de bord</a></p>

    <?php if (isset($_GET['msg']) && $_GET['msg'] === 'deleted') : ?>
        <p class="success">L'utilisateur a été supprimé avec succès.</p>
    <?php elseif (isset($_GET['error']) && $_GET['error'] === 'self_delete') : ?>
        <p class="error">Sécurité : Vous ne pouvez pas vous supprimer vous-même !</p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom d'utilisateur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td>
                        <a href="profile.php?id=<?php echo $user['id']; ?>">Voir profil</a> | 
                        <a href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Supprimer cet utilisateur ?');" style="color: red;">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>