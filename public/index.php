<?php
header("Content-type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once("../src/vendor/autoload.php");

use Src\Classes\ClassRoutes;

$new=new ClassRoutes();
$teste=$new->getRota();
var_dump($teste); 