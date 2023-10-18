<?php
function esPalindromo($micadena){
    $micadena = strtolower($micadena);
    $cadreves = strrev($micadena);

    if(strcmp($micadena,$cadreves)){
        echo "Es palindromo";
    }else{
        echo "No es palindromo";
    }
    return;
}
$cadena = "Ana lava Lana";
esPalindromo($cadena);