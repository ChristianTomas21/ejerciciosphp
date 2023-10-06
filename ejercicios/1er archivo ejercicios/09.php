<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>
            <?php
            $jugadores = array();
            array_push($jugadores, "LeBron James");
            array_push($jugadores, "Anthony Davis");
            array_push($jugadores, "Christian Wood","D'Angelo Russell", "Austin Reaves");
            foreach($jugadores as $elemento){
                echo "$elemento";
            }
            echo "<br>";
            echo "<br>";
            for($i=0;$i<count($jugadores);$i++){
                echo $i+1 . " $jugadores[$i],";
            }
            echo "<br>";
            ?>
        </p>
    </body>
</html>