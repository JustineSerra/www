<!-- Exercice 1 -->
<?php

class Animal {
    public $nom;
    public $espece;

    public function __construct($nom,$espece) {
        $this->nom=$nom;
        $this->espece=$espece;
    }

    public function decrire() {
        echo "Je suis un " . $this->espece . " et je m'appelle " . $this->nom . "<br>";
    }
}
$monAnimal=new Animal("Urus", "Golden");
$monAnimal->decrire();

//Exo 2
class Chien extends Animal {
    public function aboyer() {
        echo "Wouf! <br>";
    }

}

$monChien = new Chien("Loulou", "Yorkshire");
$monChien->aboyer();
$monChien->decrire();


?>