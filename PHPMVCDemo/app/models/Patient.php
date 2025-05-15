<?php

class Patient{
    //Propperties
    private $id;
    private $fullName;
    private $gender;

    public function __construct($id,$fullName,$gender){
        $this->id = $id;
        $this->fullName = $fullName;
        $this->gender = $gender;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getFullName(){
        return $this->fullName;
    }

    public function setFullName($fullName){
        $this->fullName = $fullName;
    } 

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
}

?>