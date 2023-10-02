<?php

// mostrar por pantalla echo, print, print_r, var_dumb

$num = 16;
$num2= "16";
$num3= "62" + 3;
$cadena = "hola: \"Pedro\"";
$decimal = 9.6;
$resultado = (integer)($num2 / $decimal);
echo $cadena;
echo "<br>" . $num3;
echo gettype($decimal);
echo  "<br>". $resultado;

// Operadores Aritmeticos y logicos
// Logicos: &&, ||
// Aritmeticos: +,-,*,/,%,**,
// Comparacion: ==, !=, <>,!,<=,>=
// if, else, elseif,switch case
// == igual contenido
// === igual contenido y tipo
// spaceship: 2<=>2 -> 0
// 2<=>3 -1; 6<=>3 -> 1


if($num==$num2){
    echo  "<br>". "Son iguales";
}else{
    echo  "<br>". "Son diferentes";
}

// constante
define("PI",3.14);
echo "<br>PI VALE: ". PI;
const NUMAUREO = 1.15;
echo "<br>NUMAUREO VALE: ". NUMAUREO;

echo "<br><h3>Bucle FOR</h3>";
for($i=0;$i<=10;$i++){
    echo "i vale: ". $i. "<br>";
}



