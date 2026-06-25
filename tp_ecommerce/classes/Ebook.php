<?php
class Ebook extends Produit {

    public function calculerPrixTTC(): float
    {
        return $this->prixHT*1.20;
    }
}
//renvoie déjà à 0 grâce à la classe parent Produit donc pas besoin de surcharger getFraisDePort


?>