<?php
namespace Model;
include("{$_SERVER['DOCUMENT_ROOT']}/SistemaDentista/Class/ClassConexao.php");
use App\Model\ClassConexao;

class ClassCrud extends ClassConexao{
    private $Crud;
    private $Contador;

     #Preparação das declarações
    private function preparedStatements($Query, $Parametros){
        $this->countParametros($Parametros);
        $this->Crud=$this->conexaoDB()->prepare($Query);
        
        if($this->Contador > 0){
            for($I=1; $I <= $this->Contador; $I++){
                $this->Crud->bindValue($I,$Parametros[$I-1]);
            }   
        }
        $this->Crud->execute();
    }

     #Contador de parametros
     private function countParametros($Parametros)
     {
         $this->Contador=count($Parametros);
     }

    //Inserção de dados
    public function InsertDB($Table, $Values, $Parametros){
         $this->preparedStatements("insert into {$Table} values ({$Values})", $Parametros);
         return $this->Crud;
    }

    //Seleção de dados
    public function SelectDB($Fields,$Table, $Where, $Parametros){
        $this->preparedStatements("select {$Fields} from {$Table} {$Where}", $Parametros);
        return $this->Crud;
    }

    //Atualização de dados
    public function UpdateDB($Table, $Values, $Where, $Parametros){
        $this->preparedStatements("update {$Table} set {$Values} where {$Where}", $Parametros);
        return $this->Crud;
    }

    //Deleção de dados
    public function DeleteDB($Table, $Values, $Parametros){
        $this->preparedStatements("delete from {$Table} where {$Values}", $Parametros);
        return $this->Crud;
    }
}