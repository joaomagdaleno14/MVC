<?php
namespace App\Models;

class ClassLogin extends ClassConexao{
    
    #validar o usuário no banco
    protected function validarUsuario($Usuario, $Senha){
        $BFetch=$this->conexaoDB()->prepare("select * from login where Usuario=:Usuario and Senha=:Senha ");
        $BFetch->bindParam(":Usuario",$Usuario,\PDO::PARAM_STR);
        $BFetch->bindParam(":Senha",$Senha,\PDO::PARAM_STR);
        $BFetch->execute();
        if($Row=$BFetch->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

}