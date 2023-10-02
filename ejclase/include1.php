<?php
include "include2,php"; //si hay un error continua la ejecucion
//require -> si hay un error no ejecuta mas

//include_once -> incluyen el fichero solo una vez
//require_once -> incluyen el fichero solo una vez

echo "<h1>Soy el primer fichero</h1>";
echo "el valor de var es $var";

include_once "include2.php";
echo "<br>Otra cadena";