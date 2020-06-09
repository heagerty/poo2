<?php

require_once 'Bicycle.php';
require_once 'Car.php';


abstract class HighWay
{

    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;

    /**
     * @return array
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @param mixed $vehicle
     */
    abstract function addVehicle($vehicle);



}

final class MotorWay extends HighWay
{
    protected $currentVehicles;
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    function addVehicle($vehicle) {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
        }
    }

}

final class PedestrianWay extends HighWay
{
    protected $currentVehicles = [];
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    function addVehicle($vehicle) {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        }
    }

}

final class ResidentialWay extends HighWay
{
    protected $currentVehicles = [];
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    function addVehicle($vehicle) {
        if ($vehicle instanceof Car || $vehicle instanceof Truck || $vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        }
    }

}

echo "go";

$motorway = new MotorWay();
$jag = new Car('black', 7, '');
$jag2 = new Car('black', 7, '');
$bike = new Bicycle('black');

$motorway->addVehicle($jag);
$motorway->addVehicle($jag2);
$motorway->addVehicle($bike);

$array = $motorway->getCurrentVehicles();

