<!-- Exo 6 -->

<?php

abstract class Animal {
    protected string $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    abstract public function decrire(): void;
}

class Chien extends Animal {
        public function decrire(): void {
            echo "Je suis un chien, je m'appelle {$this->nom} et je fais Wouf!<br>";
        }
    }

    class Chat extends Animal {
        public function decrire(): void {
            echo "Je suis un chat, je m'appelle {$this->nom} et je fais Miaou! <br>";
        }
    }

    $animaux = [
        new Chien("Urus"),
        new Chat("Simba"),
        new Chien("Oscar"),
        new Chat("Sacha")
    ];

    foreach($animaux as $animal) {
        $animal->decrire();
    //Observation: la variable $animal change de type (un coup chien un coup chat). PHP sait à quelle classe appartient l'objet et il appelle la bonne version de méthode decrire().
}


?>