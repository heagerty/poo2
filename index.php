<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('blue', 4, 'gas');

print $car->getColor();
print $car->start();
print $car->brake();
print $car->forward();




$truck1 = new Truck('blue', 4, 'gas', 100);
$truck2 = new Truck('red', 18, 'gas', 200);

print $truck1->getColor();
print $truck2->forward();


print $truck1->getLoad();
$truck1->setLoad(99);
print $truck1->getLoad();

print $truck1->getLoad();
$truck1->setLoad(100);
print $truck1->getLoad();
echo $truck1->isFull();


print $truck1->start();
print $truck1->brake();
print $truck1->forward();