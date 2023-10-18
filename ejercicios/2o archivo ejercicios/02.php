<?php
if(isset($_POST['calcular']) && !empty($_POST["calcular"])){
    $numerador = $_POST['numerador'];
    $denominador = $_POST['denominador'];
    
    try{
        if($_POST['denominador'] == 0){
            throw new Exception("El divisor es 0");
        }
       
    } catch(Exception $ex){
        echo "se ha producido una excepcion" . $ex->getMessage();
    }finally{
        echo "<br>Esto siempre se ejecutaba";
    }
}
