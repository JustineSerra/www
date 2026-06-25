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

        public function aboyer(): void {
            echo "Le chien {$this->nom} aboie: Ouaf Ouaf! <br>";
        } //exo 7
}

class Chat extends Animal {
        public function decrire(): void {
            echo "Je suis un chat, je m'appelle {$this->nom} et je fais Miaou! <br>";
        }

        public function miauler(): void {
            echo "Le chat {$this->nom} miaule: Miaouuu !<br>";
        } //exo 7
}

class Chihuahua extends Chien {
    public function aboyer(): void {
        echo "Le petit chihuahua {$this->nom} fait : Wouf Wouf <br>";
    }
}

$monChihuahua = new Chihuahua("Arnold");
$monChihuahua->decrire();
$monChihuahua->aboyer();
//exo 8

$animaux = [
        new Chien("Urus"),
        new Chat("Simba"),
        new Chien("Oscar"),
        new Chat("Sacha")
];

    foreach($animaux as $animal) {
        $animal->decrire();
    //Observation: la variable $animal change de type (un coup chien un coup chat). PHP sait à quelle classe appartient l'objet et il appelle la bonne version de méthode decrire().

    if($animal instanceof Chien) {
        $animal->aboyer();
    } elseif ($animal instanceof Chat) {
        $animal->miauler();
    }
    //exo 7

    echo "<br>";
}

//Exo 9

function presenterAnimal(Animal $animal): void{
    echo "Presentation <br>";
    $animal->decrire();

    if ($animal instanceof Chien) {
        $animal->aboyer();
    } elseif ($animal instanceof Chat) {
        $animal->miauler();
    }
    echo "------------<br>";
//exo 10
}

$chien=new Chien("Urus");
$chat=new Chat("Simba");
$chihuahua=new Chihuahua("Arnold");

presenterAnimal($chien);
presenterAnimal($chat);
presenterAnimal($chihuahua);



?>