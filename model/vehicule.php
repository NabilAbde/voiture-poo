<?php

class Vehicule

{
    // Attributs
    private $marque;
    private $_volumeCarburant;
    protected $_estRepare;

    // Méthodes
    public function __construct()// on ne met rien entre parenthese car on renseigne apres mais si on__ construct($marqueparametre alors this->marque=$marqueparametre)
    {
        $this->marque = "Kia";
        $this->_volumeCarburant = 40;
        $this->_estRepare = false;
    }
    public function setMarque($marque) // setter
    {
        $this->marque = $marque;
    }
    public function getMarque($marque) // getter
    {
        return $this->marque;
    }

    // Démarre la voiture si le réservoir
    // n'est pas vide
    public function demarrer()
    {
        if ($this->_controlerVolumeCarburant()) {
            echo 'Le véhicule démarre';
            return true;
        }

        echo 'Le réservoir est vide...';
        return false;
    }
    public function setVolume($nouvelleValeur)
    {
        $this->_volumeCarburant = $nouvelleValeur;
    }
    public function getVolume()
    {
        echo ("le volume du reservoir est : " . $this->_volumeCarburant . " L");
    }
    // Vérifie s'il y'a du carburant dans le réservoir
    private function _controlerVolumeCarburant()
    {
        return ($this->_volumeCarburant > 0); // renvoi true ou false
    }

    // Met le véhicule en maintenance
    protected function reparer()
    {
        $this->_estRepare = true;
        echo 'Le véhicule est en réparation';
    }
}
/*Appeler les fonctions suivantes 
Créer une instance de l’objet vehicule correspond à $car = new Vehicule();
Appeler la fonction demarrer()
Appeler la fonction _controlerVolumeCarburant()
Appeler la fonction reparer()*/
