<?php
    if(isset($_POST['calcular'])){
        $figura = $_POST['figura'];

        if($figura == "circulo"){
            echo "<h2>Área del Círculo</h2>";
            echo "<form method='post' action=''>";
            echo "<label for='radio'>Radio:</label>";
            echo "<input type='number' name='radio' required>";
            echo "<input type='submit' name='calcular_circulo' value='Calcular'>";
            echo "</form>";
        } elseif($figura == "triangulo"){
            echo "<h2>Área del Triángulo</h2>";
            echo "<form method='post' action=''>";
            echo "<label for='base'>Base:</label>";
            echo "<input type='number' name='base' required><br>";
            echo "<label for='altura'>Altura:</label>";
            echo "<input type='number' name='altura' required>";
            echo "<input type='submit' name='calcular_triangulo' value='Calcular'>";
            echo "</form>";
        } elseif($figura == "cuadrado"){
            echo "<h2>Área del Cuadrado</h2>";
            echo "<form method='post' action=''>";
            echo "<label for='lado'>Lado:</label>";
            echo "<input type='number' name='lado' required>";
            echo "<input type='submit' name='calcular_cuadrado' value='Calcular'>";
            echo "</form>";
        }
    }

    if(isset($_POST['calcular_circulo'])){
        $radio = $_POST['radio'];
        $area_circulo = 3.14159265359 * pow($radio, 2);
        echo "El área del círculo es: " . $area_circulo;
    }

    if(isset($_POST['calcular_triangulo'])){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area_triangulo =$base * $altura / 2;
        echo "El área del triángulo es: " . $area_triangulo;
    }

    if(isset($_POST['calcular_cuadrado'])){
        $lado = $_POST['lado'];
        $area_cuadrado = pow($lado, 2);
        echo "El área del cuadrado es: " . $area_cuadrado;
    }