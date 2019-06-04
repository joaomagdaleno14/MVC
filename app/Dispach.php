<?php
namespace App;
use Src\Classes\ClassRoutes;

class Dispach extends ClassRoutes{

    #Atributos
    private $Method;
    private $Param=[];
    private $Obj;

    #Método Construtor
    public function __construct(){
        self::addController();
    }

    #Método de adição do controller
    private function addController(){
        $RotaController=$this->getRota();
        $NameS="App\\Controller\\{$RotaController}";
        $this->Obj=new $NameS;
    }

    #Método de adição de método do controller
    private function addMethod(){

    }

    #Método de adição de parâmetros do controller
    private function addParam(){

    }
}