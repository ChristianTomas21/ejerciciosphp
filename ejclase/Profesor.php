<?php

class Profesor extends Persona{
    private  $codProfesor;

    public function __construct($nombre,$edad,$codProfesor){
        
        parent::__construct($nombre,$edad);
        $this->codProfesor = $codProfesor;
    }

    public function getCodProfesor(){
        return $this->codProfesor;
    }

    public function setCodProfesor($codProfesor){
        $this->codProfesor = $codProfesor;
    }
    function __toString(){
        //parent::__toString();
        return "Profesor con codigo " . $this->getCodProfesor();
    }
}