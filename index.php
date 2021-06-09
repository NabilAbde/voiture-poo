<?php
require_once("model/vehicule.php");
require_once("model/voiture.php");

$car = new Vehicule(); //creation de l instance
/*var_dump($car);
echo $car->marque;
// quand on appelle une methode avec une classe publique ca marche
echo $car->marque = "peugeot";*/

$car->demarrer();

$car->setMarque("ferrari");
echo $car->getMarque("marque");

$car->setVolume(45);
var_dump($car);
$car->getVolume();


/*$car->_controlerVolumeCarburant(); //ne marche pas car methode privee
$car->reparer();// car methode protegee*/
echo ("------------------");

$maVoiture = new Voiture;
var_dump($maVoiture);
$maVoiture->setVolume(45);
$maVoiture->getVolume();
?>
<h3>Information carburant, <?php $maVoiture->getVolume(); ?></h3>
<h3><?php echo $maVoiture->getReparer(); ?></h3>
<?php
