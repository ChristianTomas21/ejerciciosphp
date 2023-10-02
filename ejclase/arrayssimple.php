<?php
echo "<h1>Arrays</h1>";
$array = array(6,"perro",9.8,true);
var_dump($array);
echo "<br>";
print_r($array);
echo "Num elem:". count($array);

echo "<h3>Acceder a elementos</h3>";
for($i=0;$i<count($array);$i++){
    echo "<br>Elemento vale: ". $array[$i];
}

echo "<hr>";
foreach($array as $elemento){
    echo "<br>Elem: ". $elemento;
}

//Añadir elemento
$array[] = "otro";
$array[22] = "ultimo";
print_r ($array);
echo "Num elem: ". count($array);
echo "<br> El sexto elemento es: ". $array[22];
//for($i=0;$i<count($array);$i++){
//    echo "<br> Elemento vale: ". $array[22];
//}
$array = array_values($array);
print_r($array);

echo "<br> esta el 6 ?" . in_array(6,$array);
