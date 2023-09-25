<?php 

define("DS",DIRECTORY_SEPARATOR);

define("ROOT",dirname(__DIR__));

define( "APP" ,ROOT.DS.'app');

define( "CONFIG" ,APP.DS.'config');

define( "CONTROLLERS" ,APP.DS.'controllers');

define( "MODELS" ,APP.DS.'models');

define( "VIEWS" ,APP.DS.'views');

define( "CORE" ,APP.DS.'core');

//echo ROOT;

//config

define("SERVER","localhost");

define("USERNAME","root");

define("PASSWORD","");

define("DATABASE","project1");

define("DATABASE_TYPE","mysql");

define("DOMAIN_NAME","http://mvc.test/");



require_once("../vendor/autoload.php");

$app = new MVC\core\app () ;