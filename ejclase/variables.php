<?php
echo "<h1>VARIABLES</h1>";
$saludo = "hola"; //case sensitive : variables pero funcionan
echo "<br>Un saludo: $saludo";

echo "<h3>Concatenar variables</h3>";
$despedida = " y adios";
$despedida .= $saludo;  // $despedida = $despedida.$saludo
$numero = 20;
echo "<br>$despedida";
$numero += 3; // $numero = $numero + 3
// $numero++ y ++$numero
echo "<br>$despedida con numero $numero";

echo "<h3>Valor y referencia</h3>";
$var = 100;
$var2 = &$var; //var2 es una referencia a var
$var3 = $var;
echo "<br> var es: ", $var;
echo "<br> var2 es: ", $var2;
echo "<br> var3 es: ", $var3;

$var = 333;
echo "<br> var es: ", $var;
echo "<br> var2 es: ", $var2;
echo "<br> var3 es: ", $var3;

echo "<h3>Variables de variables</h3>";
$vehiculo = "coche";
$$vehiculo = "audi"; //$vehiculo=coche; $coche = audi
echo "<br> El $vehiculo es de marca $coche";
echo "<br> El $vehiculo es de marca " . ${$vehiculo};
