<?php

include_once "App.php";
include_once "vistas/index.php";

echo "Empezando...<br>";

$app = new App;

//$app->index();
//$app->login();
$app->run();
$app->fibonacci();