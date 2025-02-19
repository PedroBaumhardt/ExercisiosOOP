<?php

class Passenger{

    private $name;
    private $age;
    private $seatNumber;

    public function __construct($n,$a,$sN){
        $this->name = $n;
        $this->age = $a;
        $this->seatNumber = $sN;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSeatNumber(){
        return $this->seatNumber;
    }
    public function setSeatNumber($sN){
        $this->seatNumber = $sN;
    }
}