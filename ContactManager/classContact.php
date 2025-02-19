<?php

class Contact{

    

    public $name;
    public $email;
    public $phone;

    public function __construct($n,$e,$p){

        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;

    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setEmail($mail){
        $this->email = $mail;
    }
    public function setPhone($p){
        $this->phone = $p;
    }

}