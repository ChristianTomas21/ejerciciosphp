<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <p>
            <?php
            $jugadores = array("LeBron James","Anthony Davis","Austin Reaves", "D'Angelo Russell", "Christian Wood");
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