<?php
namespace App\Controller;
include_once("../src/class/ClassRender.php");
include_once("../src/interfaces/InterfaceView.php");
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    
    public function __construct(){
        $this->setTitle("Pagina Inicial");
        $this->setDescription("Esse é nosso Site MVC");
        $this->setKeywords("mvc, curso de mvc, mvc de livros");
        $this->setDir("home");
        $this->renderLayout();
    } 

    

}