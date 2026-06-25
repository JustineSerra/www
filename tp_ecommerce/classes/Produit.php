<?php

abstract class Produit {
    protected string $nom;
    protected float $prixHT;
    //propriétés protégées

    protected function __construct(string $nom, float $prixHT) {
        $this->nom=$nom;
        $this->prixHT=$prixHT;
    }
    //constructeur

    public function getNom(): string{
        return $this->nom;
    }
    //getter pour rendre le nom public

    abstract public function calculerPrixTTC(): float;
    //méthode abstraite : il n'y a pas de ligne de code, PHP calculera automatiquement sans faire de IF. C'est un ordre du parent 
    //c'est le mot clé "abstract" qui rend cette méthode abstraite


    public function getFraisDePort(): float{
        return 0.0;
    }
    //méthode concrète: on écrit du vrai code, tous les frais de port auront 0

}


?>