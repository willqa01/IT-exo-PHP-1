
<?php
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