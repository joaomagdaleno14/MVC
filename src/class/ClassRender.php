<?php
namespace Src\Classes;

class ClassRender{
    
    #Propriedades
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir(){return $this->Dir;}
    public function setDir($Dir){$this->Dir = $Dir;}
    public function getTile(){return $this->Title;}
    public function setTitle($Title){$this->Title = $Title;}
    public function getDescription(){return $this->Description;}
    public function setDescription($Description){$this->Description = $Description;}
    public function getKeywords(){return $this->Keywords;}
    public function setKeywords($Keywords){$this->Keywords = $Keywords;}

    #Metódo responsável por renderizar todo o layout 
    public function renderLayout(){
        include_once(DIRREQ."app/view/Layout.php");
    }


    #Adiciona caracteristicas especificas no head
    public function addHead(){

    }
    

    #Adiciona caracteristicas especificas no main
    public function addMain(){

    }


    #Adiciona caracteristicas especificas no footer
    public function addFooter(){

    }
}