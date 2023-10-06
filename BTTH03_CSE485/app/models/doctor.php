<?php
 
 class Doctorr{
    private $id;
    private $name;
    private $specialist;

    public function __construct($id, $name, $specialist){
        $this->id = $id;
        $this->name = $name;
        $this->specialist = $specialist;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getSpecialist(){
        return $this->specialist;
    }
 }
?>