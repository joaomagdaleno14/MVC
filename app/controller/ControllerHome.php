<?php
namespace App\Controller;

use Src\Classes\ClassRender;

class ControllerHome extends ClassRender{
    
    public function __construct(){
        $this->setTitle("Pagina Inicial");
        $this->setDescription("Esse é nosso Site MVC");
        $this->setKeywords("mvc, curso de mvc, mvc de livros");
        $this->setDir("home/");
        $this->renderLayout();
    } 

}