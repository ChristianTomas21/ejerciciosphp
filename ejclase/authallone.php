<?php
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){ 
    if(isset(($_POST["iusuario"])) && !empty($_POST["iusuario"])){
        $usuario = $_POST["iusuario"];
    }else{
        $err = true;
    }
    if(isset(($_POST["ipassword"])) && !empty($_POST["ipassword"])){
        $password = $_POST["ipassword"];
    }else{
        $err = true;
    }
    if(!empty($usuario) && !empty($password)){
       /* if($usuario === "admin" && $password === "456"){
           //REDIRIGIR LA PAGINA
            header("Location: autoriza2.php");
        }*/
        header("HTTP/1.1 307 Temporary Redirect"); // POST 307
        //header ("Location: autoriza2.php?user=$usuario&password=$password");
        header("Location:autoriza2.php"); //GET 302
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>

<body>
    <h2>Página de Login</h2>
    <?php
    if($err){
    $msg = "<p style= \"color : red\> Error al introducir credenciales.</p>";
    echo $msg;
    }
    ?>
    <form name="flogin" action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <div>
            <label for="usuario">Introduce usuario: </label>
            <input type="text" name="iusuario" id="usuario">
            <br> <br><br>
            <label for="password">Introduce password: </label>
            <input type="text" name="ipassword" id="password">
        </div>
        <br><br>
        <input type="submit" name="ienviar" value="Enviar">
    </form>

</body>

</html>