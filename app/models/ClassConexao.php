<?php
namespace App\Models;

class ClassConexao{

    #Realiza conexão com o banco de dados
    public function conexaoDB(){

        try{
            $Con=new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $Con;
        }catch (\PDOExepcion $Erro){
            return $Erro-> getMessage();
        }
    }
 
}