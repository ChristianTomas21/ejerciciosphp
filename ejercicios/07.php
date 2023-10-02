<?php
$num = 169;
for($i=2;$i<$num;$i++){
    if($num % $i == 0){
        echo "$num es divisible por $i, no es primo";
    }
} 
echo "<h3>El numero es primo</h3>";