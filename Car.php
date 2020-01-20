<?php

class Car
{


      /**
       * @var string
       */
      private $color;
      /**
      * @var integer
      */
      private $currentSpeed;
      /**
      * @var integer
      */
      private $nbSeats;
      /**
      * @var integer
      */
      private $nbWheels;
      /**
      * @var integer
      */
      private $energyLevel;
      /**
      * @var string
      */
      private $energy;


      public function __construct(string $color, int $nbseats, string $energy)
      {
          $this->color = $color;
          $this->nbseats = $nbseats;
          $this->energy = $energy;
      }

      public function forward()
      {
          $this->currentSpeed = 15;
  
          return "Go !";
      }
  

    public function brake(): string
  {
     $sentence = "";
     if ($this->currentSpeed > 0) {
         $this->currentSpeed--;
         $sentence .= "Brake !!!";
     }
     $sentence .= "I'm stopped !";
     return $sentence;
  }


  public function start()
  {
      $this->currentSpeed = 15;

      return "Go !";
  }

  public function getNbWheels()
  {
      return $this->nbWheels;
  }

  public function getCurrentSpeed()
  {
      return $this->currentSpeed;
  }


  public function getColor()
  {
      return $this->color;
  }

  public function getNbSeats()
  {
      return $this->nbSeats;
  }

  public function getEnergy()
  {
      return $this->energy;
  }

  public function getEnergyLevel()
  {
      return $this->energyLevel;
  }


  
}
