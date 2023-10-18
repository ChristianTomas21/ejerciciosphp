<?php

echo "<h2>Funciones php</h2>";

function sumar($oper1,$oper2){
    $ressuma = $oper1 + $oper2;

    static $contador = 0;
    echo "<br>Contador vale " . $contador++;

    global $varglobal;
    $varglobal = 13456;

    return $ressuma;
}

function aumentarsueldo(&$operando){
    $operando *= 3;
}

echo "<p>Funcion suma</p>";
$dato = sumar(4,6);


$dato = sumar(5,8);
echo "<p>Resultado suma </p>" . $dato;

$varglobal = 666;
echo "<p>Varglobal con valor antes de llamar a sumar </p>" . $varglobal;
$dato = sumar(3,1);
echo "<p>Varglobal con valor despues de llamar a sumar </p>" . $varglobal;

$sueldo = 1000;
aumentarsueldo($sueldo);