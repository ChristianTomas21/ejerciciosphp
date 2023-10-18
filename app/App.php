<?php
 
class App
{
  public function __construct()
  {
    echo "construyendo App<br>";
  }
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
    $this->$method();
  }
  
  /*public function index(){
        //bienvenida a la aplicacion
        echo "Aqui pondremos la bienvenida<br>";
    }
    public function login(){
        //mostrar pantalla de login
        echo "Aqui pondremos el login<br>";
    }*/
  public function fibonacci(){
   
    $v1 = 0;
    $v2 = 1;
    echo $v1 . '<br>';

   
    for ($i = 0; $i < 1000000; $i++) {
      $temp = $v1;
      $v1 = $v2;
      $v2 = $temp + $v1;

      echo $v1 . '<br>';
    }
  }

}
