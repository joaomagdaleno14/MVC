<?php
//session_start();
header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once(DIRREQ."helpers/Variaveis.php");
require_once(DIRREQ."src/vendor/autoload.php");
require_once(DIRREQ."src/class/ClassRoutes.php");
require_once(DIRREQ."src/class/ClassBreadcrumb.php");
require_once(DIRREQ."app/models/ClassCrud.php");
//$_SESSION['login']=false;

$Dispach=new App\Dispach();