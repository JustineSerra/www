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
        //exo 3
    }

        public function decrire() {
        echo "Je suis un chien et je m'appelle " . $this->nom . "<br>";
    } //observation : PHP ignore la méthode parent et execute $monChien->decrire de la classe Chien

}

$monChien = new Chien("Loulou", "Yorkshire");
$monChien->aboyer(); //exo 3
$monChien->decrire();

//exo 5
class Chat extends Animal {
    public function miauler() {
        echo "Miaou <br>";
    }

    public function decrire() {
        echo "Je suis un chat et je m'appelle " . $this->nom . "<br>";
    }
}

$monChat=new Chat("Simba", "Siamois");
$monChat->miauler();
$monChat->decrire();

?>