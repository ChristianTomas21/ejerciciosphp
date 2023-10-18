<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($POST["secu"]) && !empty($_POST["secu"])) {
        $a = $_POST["coef1"];
        $b = $_POST["coef2"];
        $c = $_POST["coef3"];
        $soluciones = array();

        $soluciones = calcularSolucion($a,$b,$c);
        if(isset($soluciones) && !empty($soluciones)){
            echo "<p>Soluciones son: </p>" . $soluciones[0] . " y " . $soluciones[1];
        }else{
            echo "no hay solucion";
        }
    }else{
        echo "no has pulsado el boton submit";
    }
}
function calcularSolucion($a, $b, $c){
    if (pow($b, 2) - 4 * $a * $c < 0) {
        return false;
    } else {
        $res1 = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
        $res2 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / (2 * $a);
        
        return $soluciones = array($res1, $res2);
    }
    if(false){
        echo "<p>no hay solucion</p>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calcular Ecuaciones 2º Grado</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        <input type="number" id="coef1" name="coef1">x<sup>2 +-
        <input type="number" id="coef2" name="coef2">x<sup> +-
        <input type="number" id="coef3" name="coef3">  
         <br>
        <input type="submit" value="calcularSolucion">
    </form>

</body>

</html>