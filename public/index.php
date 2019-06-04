<?php
header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once(DIRREQ."src/vendor/autoload.php");
require_once(DIRREQ."src/class/ClassRoutes.php");

$Dispach=new App\Dispach();