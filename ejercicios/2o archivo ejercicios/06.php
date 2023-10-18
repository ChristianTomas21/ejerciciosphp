<!DOCTYPE html>
<html>
<head>
    <title>Información de la Página Web</title>
</head>
<body>
    <h1>Información de la Página Web</h1>
    <ul>
        <li>Directorio raíz del documento actual: <?php echo getcwd(); ?></li>
        <li>Protocolo: <?php echo $_SERVER['SERVER_PROTOCOL']; ?></li>
        <li>Nombre del servidor (host): <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Tipo de petición HTTP: <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
        <li>Dirección IP del usuario: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    </ul>
</body>
</html>
