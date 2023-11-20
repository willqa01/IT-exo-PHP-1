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
class Departement {
    private $nom;
    private $employes = [];

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function ajouterEmploye($employe) {
        $this->employes[] = $employe;
    }

    public function afficherEmployes() {
        echo "Employés du département " . $this->nom . ":\n";
        foreach ($this->employes as $employe) {
            $employe->afficherInfos();
        }
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
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
