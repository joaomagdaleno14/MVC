<?php
//session_start();
header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once(DIRREQ."src/vendor/autoload.php");
require_once(DIRREQ."src/class/ClassRoutes.php");
require_once(DIRREQ."src/class/ClassBreadcrumb.php");
//$_SESSION['login']=false;

$Dispach=new App\Dispach();