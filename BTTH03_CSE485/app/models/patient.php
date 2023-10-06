<?php
 
 class Patients{
    private $id;
    private $name;
    private $date;
    private $signal;
    private $idDoctor;

    public function __construct($id, $name, $date, $signal, $idDoctor){
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->signal = $signal;
        $this->idDoctor = $idDoctor;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getDate(){
        return $this->date;
    }
    public function getSignal(){
        return $this->signal;
    }
    public function getIdDoctor(){
        return $this->idDoctor;
    }
 }
?>