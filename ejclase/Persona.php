<?php
    class Persona{
        private $nombre; //public , protected
        private $edad;
        static $contadorPersonas;

        public function __construct($nombre,$edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
            self::$contadorPersonas++;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        function __toString(){
            return "Persona con nombre " . $this->getNombre() . " y edad " . 
            $this->getEdad();
        }
    }