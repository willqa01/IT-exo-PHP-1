<?php

class Employe {
    private $nom;
    private $age;
    private $departement;

    public function __construct($nom, $age, $departement) {
        $this->nom = $nom;
        $this->age = $age;
        $this->departement = $departement;
    }

    public function afficherInfos() {
        echo "Nom: " . $this->nom . ", Age: " . $this->age . ", Département: " . $this->departement . "\n";
    }
}


// Utilisation des classes
$departementIT = new Departement("Informatique");

$employe1 = new Employe("Alice", 30, "Informatique");
$employe2 = new Employe("Bob", 35, "Informatique");


$departementIT->ajouterEmploye($employe1);
$departementIT->ajouterEmploye($employe2);

$departementIT->afficherEmployes();
$test = "";
?>
