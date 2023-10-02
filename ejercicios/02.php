<!DOCTYPE html>
<html>
    <head>
        <title>Ej2</title>
    </head>
    <body>
        <table border='1'>
        <?php
        $nombre= "Pedro";
        $direccion= "Calle no se qué";
        $mail = "Pedro@gmail.com";

        echo "
        <tr>
            <td>Nombre</td>
            <td>$nombre</td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td>$direccion</td>
        </tr>
        <tr>
            <td>Mail</td>
            <td>$mail</td>
        </tr>
    ";
        
        ?>
        </table>
    </body>
</html>