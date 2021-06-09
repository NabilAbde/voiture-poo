<?php

class Voiture extends Vehicule //hritage de la classe vehicule
{

    protected $_modele;
    protected $_nombreDePlace;

    public function __construct()
    {
        $this->marque = "Kia";
        $this->_volumeCarburant = 40;
        $this->_estRepare = false;
        $this->_modele = "sport";
        $this->_nombreDePlace = "2";
    }
    public function getReparer()
    {
        echo ('Information reparation de votre voiture : ');
        parent::reparer(); // ici parent :: parce que la fonction est protected dans vehicule (parent)
    }
}
