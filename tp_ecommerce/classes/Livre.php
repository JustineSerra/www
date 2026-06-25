<?php

class Livre extends Produit {

    public function calculerPrixTTC(): float{
        return $this->prixHT*1.055; //TVA à 5.5%
    }

    public function getFraisDePort(): float
    {
        return 2.0; //Frais de port à 2€
    }
}

?>