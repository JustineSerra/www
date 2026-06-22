<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}

require_once 'database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_supprime=(int)$_GET['id'];
    $id_session=(int)$_SESSION['user_id'];
//récupération et sécurisation de l'ID

    if ($id_supprime === $id_session) {
        header("Location: list_users.php?error=self_delete");
        exit ();
    }

    try {
        $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id=?");
        $stmt->execute([$id_supprime]);

        header("Location:list_users.php?msg=deleted");
        exit();
        //suppresion dans la base de données

    } catch (PDOException $e) {
        die ("Erreur lors de la suppression : " . $e->getMessage());
    }

} else {
    header("Location:list_users.php");
    exit();
    //sécurité par défaut
}

?>