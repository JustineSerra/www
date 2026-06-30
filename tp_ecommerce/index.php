<?php 
require_once "db.php";
require_once "classes/Produit.php";
require_once "classes/Livre.php";
require_once "classes/Ebook.php";
require_once "ProduitFactory.php";

function ajouterAuPanier(Produit $produit): void{
    $prixTTC = number_format($produit->calculerPrixTTC(), 2);
    $frais = number_format($produit->getFraisDePort(), 2);

    echo "{$produit->getNom()} - TTC : {$prixTTC} € + Port : {$frais} €<br>";
}

try {
    $connexion = Database::getConnexion();

    $stmt=$connexion->query("SELECT * FROM produit");
    $lignes=$stmt->fetchAll(PDO::FETCH_ASSOC);

    $total=0;

    echo "<p>Contenu du panier </p>";

    foreach($lignes as $ligne) {
        $produit=ProduitFactory::creerProduit($ligne);
        ajouterAuPanier($produit);
        $total += $produit->calculerPrixTTC()+$produit->getFraisDePort();
    }
    echo "<p> TOTAL : " . number_format($total, 2) . " € </p>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

//On écrit (Produit $produit) pour ne typer que des Produit ! 
//PHP le sait grâce au polymorphisme, si l'objet appartient à Livre c'est 5.5%.
// 0 IF car c'est le principe de POO, nous éviter de l'utiliser

?>