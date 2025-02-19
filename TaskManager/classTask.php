<?php

class Task{

    public $title;
    public $description;
    public $completed = false;

    public function markAsCompleted(){

        $this->completed = true;

    }
    public function markAsIncomplete(){

        $this->completed = false;

    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function isCompleted(){
        return $this->completed;
    }

}
