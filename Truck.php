<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{


     
      protected $energyLevel;
      /**
      * @var string
      */
      protected $energy;
      /**
      * @var integer
      */
      private $capacity;
      /**
      * @var integer
      */
      private $load;


      public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
      {

          parent::__construct($color, $nbSeats);
          $this->energy = $energy;
          $this->capacity = $capacity;
          $this->load = 0;

      }




  public function start()
  {
      $this->currentSpeed = 15;

      return "Go !";
  }






  public function getEnergy()
  {
      return $this->energy;
  }

  public function getEnergyLevel()
  {
      return $this->energyLevel;
  }


  public function getCapacity()
  {
      return $this->capacity;
  }

  public function setCapacity(int $capacity)
  {
      $this->capacity = $capacity;
  }


  public function getLoad()
  {
      return $this->load;
  }

  public function setLoad(int $load)
  {
      $this->load = $load;
  }


public function isFull()
{
  return $this->load === $this->capacity; 
}
  
}
