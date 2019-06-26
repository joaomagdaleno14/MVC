<?php

namespace App\Controllers;
//session_start();
include_once("../src/class/ClassRender.php");
include_once("../src/interfaces/InterfaceView.php");
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;


class ControllerContato extends ClassRender implements InterfaceView{
    
    public function __construct(){

        //if(isset($_SESSION['login'])){
            $this->setTitle("Contato");
            $this->setDescription("Faça contato conosco.");
            $this->setKeywords("contato, telefone, email,");
            $this->setDir("contato");
            $this->renderLayout();
        //}else{
            //echo "Você é um hacker. Acesso Negado!";
        //}
    } 

    

}