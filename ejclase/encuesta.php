<?php
    echo "<h2>Resultado encuestas</h2>";
    if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){

        //chequeo del radio button
        if(isset($_POST["lprog"]) && !empty($_POST["lprog"])){
            $lenguaje = $_POST["lprog"];
            echo "<h4>Tu lenguaje preferido es: $lenguaje</h4>";
        }
         //chequeo del checkbox
         //echo "<br>Num elemento : " . count($_POST["ntrans"]);
        if(isset($_POST["ntrans"]) && !empty($_POST["ntrans"])){
            $transportes = $_POST["ntrans"];
            foreach($transportes as $transporte){
                echo "<br>Transporte seleccionado : ". $transporte;
            }
        }else{
            echo "<br>No has seleccionado ningún transporte";
        }
         //chequeo del lista seleccion simple
         if(isset($_POST["sfutbol"]) && !empty($_POST["sfutbol"])){
            $efutbol = $_POST["sfutbol"];
            echo "<h4>Tu equipo preferido es: $efutbol</h4>";
        }
    }