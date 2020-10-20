<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
$bike = new Bicycle('blue',2); 
$car = new Car('blue',2,'fuel');
$bigCar = new Truck('blue',2,'fuel',20);
$bigCar->setLoading(21);

// Moving bike
echo $bike->forward() . '<br>';
echo $bike->start();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

echo '<br>';
echo $car->forward() . '<br>';
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake() . '<br>';

echo '<br>';
echo $bigCar->isFull() . '<br>';
echo $bigCar->forward() . '<br>';
echo $bigCar->start();
echo '<br> Vitesse du Camion : ' . $bigCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $bigCar->brake();
echo '<br> Vitesse du Camion : ' . $bigCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $bigCar->brake();