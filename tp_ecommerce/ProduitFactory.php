<?php
require_once "./classes/Produit.php";
require_once "./classes/Livre.php";
require_once "./classes/Ebook.php";

class ProduitFactory {
    public static function creerProduit(array $ligne): Produit {
        return match ($ligne["type"]) {
           
            "livre"=> new Livre($ligne["nom"], (float)$ligne["prix_ht"]),
        
            "ebook"=> new Ebook($ligne["nom"], (float)$ligne["prix_ht"]),
            default=>throw new Exception("Type de produit inconnu : " . $ligne["type"]),
        };
    }
}

//On récupère nom et prix ht dans le tableau associatif $ligne donc $ligne["nom"] et $ligne["prix_HT"].
//selon la valeur de = match (elle retourne une valeur sans écrire des break)
//new permet d'instancier un objet en php

?>

