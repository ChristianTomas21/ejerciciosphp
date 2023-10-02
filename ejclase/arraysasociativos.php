<?php
echo "<h1>Array Asociativos</h1>";

//array
//$miarray =[5,6]; $miarray("perro", "gato");
$capitales = [
    "España" => "Madrid",
    "UK" => "Londres",
    "Francia" => "Paris"
];

//Mostrar el Array
foreach($capitales as $claves => $valores){
    echo "<br>La capital de $claves es $valores ";
}

echo "<h3>Arrays multidimensionales (arrays de arrays(arrays anidados))</h3>";
$cestacompra = array(
    "frutas"=> array("pera","manzana"),
    "verduras" => array("calabacin")
);
print_r($cestacompra);

foreach($cestacompra as $claves => $valores){
    echo "<br>$claves :";
    foreach($valores as $kvalor => $vvalor){
        echo "<br>la clave es $kvalor y el valor es $vvalor";
    }
}
echo "<hr>";
echo"Las frutas son: ";
foreach($cestacompra["frutas"] as $claves => $valores){
    echo " $valores";
}


//manzana
$unafruta = $cestacompra["frutas"][1];


$cestacompra["frutas"][1] = "apple";
echo "<br> soy la fruta :" . $cestacompra["frutas"][1];


echo "<h3>Funciones de ordenacion</h3>";
//Insertar el ultimo elemento
array_push($cestacompra, "kiwi");
var_dump($cestacompra);

$cestacompra["verduras"][] = "acelga";
var_dump($cestacompra);

$unkiwi = array_pop($cestacompra); //Extrae el ultimo elemento del array
echo "<br>";
print_r($cestacompra);
echo "<br>";
echo "soy un $unkiwi";

echo "<h3>Shift y un shift</h3>";
$elemento = array_shift($cestacompra); //Extrae al principio
print_r($cestacompra);
echo "<br>";
print_r($elemento);
echo "<br>";
$elemento = array_unshift($cestacompra, "colacao"); //Inserta al principio
print_r($cestacompra);


echo "<h3>Ordenación de valores</h3>";
//sort($capitales); //ordena los valores OJO LAS CLAVES DESAPARECEN !!!!
echo "<br>";
print_r($capitales);
asort($capitales); //ordena los valores sin perder las claves
echo "<br>";
print_r($capitales);

echo "<h3>Ordenación inversa de valores</h3>";
//rsort($capitales); //ordena los valores de forma descendente OJO LAS CLAVES DESAPARECEN !!!!
echo "<br>";
print_r($capitales);
arsort($capitales); //ordena los valores de forma descendente sin perder las claves
echo "<br>";
print_r($capitales);

echo "<h2>Ordenacion segun claves</h2>";
ksort($capitales);
print_r($capitales);
