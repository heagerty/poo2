<?php

class Bicycle  implements LightableInterface
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
      * @var boolean
      */
      private $hasLuggageRack;
  


      public function __construct(string $color)
      {
        $this->color = $color;
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


    public function switchOn()
    {
        $islit = $this->getCurrentSpeed() > 10;
        return $islit;
    }

    public function switchOff()
    {
        return false;
    }


  
}
