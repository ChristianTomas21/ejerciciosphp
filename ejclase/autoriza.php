<?php
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){ 
    if(isset(($_POST["iusuario"])) && !empty($_POST["iusuario"])){
        $usuario = $_POST["iusuario"];
    }
    if(isset(($_POST["ipassword"])) && !empty($_POST["ipassword"])){
        $password = $_POST["ipassword"];
    }

    if(!empty($usuario) && !empty($password)){
        echo "<br>El usuario $usuario ha hecho login con pwd $password";
        if($usuario == "admin" && $password == "456"){
            echo "<br>Bienvenido administrador";
        }
        else{
            echo "<br>Bienvenido humilde usuario";
        }
    }
    
    else{
        echo "<h4>No has especificado usuario y/o contraseña</h4>";
    }
}else{
    echo "<h2>No has llegado aqui haciendo login</h2>";
}