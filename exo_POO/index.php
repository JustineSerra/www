<!-- Exo 1 et 2 -->
<?php
/*

class Livre {
//définition de la classe Livre

    public $titre;
    public $auteur;
    //propriété de la classe

    public function __construct($titre,$auteur) {
        $this->titre=$titre;
        $this->auteur=$auteur;
        //Le constructeur permet d'assigner le titre et l'auteur dès la création du livre
    }
}

$monLivre = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry");
//Instanciation de l'objet avec le titre demandé

echo "Livre : " .$monLivre->titre . " de " . $monLivre->auteur;
//affichage pour vérifier que tout fonctionne

*/
?>

<!-- Exo 3 -->
<?php
/*

class Livre {

    public $titre;
    public function __construct($titre) {
        $this->titre=$titre;
    }

    public function afficherTitre() {
    //fonction propre à la classe qui définit une action
        echo "Le titre de ce livre est " . $this->titre;
    }
}
$monLivre = new Livre("Le Petit Prince");
$monLivre->afficherTitre();

*/
?>

<!-- Exo 4 -->
<?php
/*

class Utilisateur {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom=$nom;
        $this->age=$age;
    }
}

$unUtilisateur = new Utilisateur("Alice", 30);
echo "L'utilisateur s'appelle " . $unUtilisateur->nom . " et a " . $unUtilisateur->age . " ans ";

*/
?>

<!-- Exo 5 -->
<?php
/*

class Utilisateur {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom=$nom;
        $this->age=$age;
    }

    public function sePresenter() {
        return "Bonjour, je suis " . $this->nom . " et j'ai " . $this->age . " ans. ";
    }
}

$unUtilisateur = new Utilisateur ("Alice", 30);
echo $unUtilisateur->sePresenter();

*/
?>

<!-- Exo 6 et 7 -->
<?php
/*

class Rectangle {

    public $longueur;
    public $largeur;

    public function __construct ($longueur, $largeur) {
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }

    public function calculerSurface() {
        return $this->longueur*$this->largeur;
    }
}
$monRectangle = new Rectangle(10,5);
$grandRectangle = new Rectangle(15,10);
$petitRectangle = new Rectangle(4,3);

echo "La surface du rectangle est de : " . $monRectangle->calculerSurface() . "<br>";
echo "La surface du grand rectangle est de : " . $grandRectangle->calculerSurface() . "<br>";
echo "La surface du petit rectangle est de : " . $petitRectangle->calculerSurface();

*/
?>

<!-- Exo 8, 9 et 10  -->
<?php 

class Voiture {
    public $marque;
    public $modele;
    public $vitesse;

    public function __construct($marque, $modele, $vitesseInitiale=0) {
        $this->marque=$marque;
        $this->modele=$modele;
        $this->vitesse=$vitesseInitiale;
    }

    public function accelerer($kmh) {
        $this->vitesse += $kmh;
    }

    public function afficherVitesse() {
        echo "La vitesse actuelle de la " . $this->marque . " est de : " .$this->vitesse . " km/h ";
    }
}
$maVoiture = new Voiture("Peugeot", "208");

//Accélération de 20km/h
$maVoiture->accelerer(20);
$maVoiture->afficherVitesse();

//Accélération de 30km/h supplémentaire
$maVoiture->accelerer(30);
$maVoiture->afficherVitesse();


?>

