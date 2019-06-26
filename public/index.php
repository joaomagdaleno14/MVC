<?php
//session_start();
header("Content-Type: text/html; charset=utf-8");
require_once("../config/config.php");
require_once(DIRREQ."src/vendor/autoload.php");
require_once(DIRREQ."src/class/ClassRoutes.php");
require_once(DIRREQ."src/class/ClassBreadcrumb.php");
require_once(DIRREQ."app/model/ClassCrud.php");
//$_SESSION['login']=false;

//$Dispach=new App\Dispach();

use Model\ClassCrud;

$Crud = new ClassCrud();
$Crud->InsertDB("Cliente","?,?,?,?,?,?,?,?",array(0,'joao','magdaleno','043.351.940-13','31/03/1999',91442082,'joaomagdaleno.14@gmail.com','Katherine232'));