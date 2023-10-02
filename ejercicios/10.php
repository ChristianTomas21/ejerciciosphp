<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>
            <?php
            $jugadores = [
                "Alero" => "LeBron James",
                "Ala-pívot" => "Anthony Davis",
                "Escolta" => "Austin Reaves",
                "Base " => "D'Angelo Russell" ,
                "Pivot" => "Christian Wood"
            ];
            foreach($jugadores as $nombres => $valores){
                echo "<br>La posicion de $nombres es $valores ";
            }
            ?>
        </p>
    </body>
</html>