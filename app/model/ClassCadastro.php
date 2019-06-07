<?php
namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{
    
    private $Db;

    #Cadastra clientes no sistema
    protected function cadastroClientes($Nome, $Sexo, $Cidade){
        $ID=0;
        $this->Db=$this->conexaoDB()->prepare("insert into teste values(:ID, :Nome, :Sexo, :Cidade)");
        $this->Db->bindParam(":ID",$ID,\PDO::PARAM_INT);
        $this->Db->bindParam(":Nome",$Nome,\PDO::PARAM_STR);
        $this->Db->bindParam(":Sexo",$Sexo,\PDO::PARAM_STR);
        $this->Db->bindParam(":Cidade",$Cidade,\PDO::PARAM_STR);
        $this->Db->execute();
    }

}