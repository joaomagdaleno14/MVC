<?php
include("{$_SERVER['DOCUMENT_ROOT']}/Exemplo/PDO/Class/ClassConexao.php");
class ClassCrud extends ClassConexao{

    #Atributos
     private $Crud;
     private $Contador;

     #Preparação das declarações
    private function preparedStatements($Query, $Parametros )
    {
        $this->countParametros($Parametros);
        $this->Crud=$this->conectaDB()->prepare($Query);
        
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

    #Insert no banco de dados
    public function insertDB($Tabela, $Condicao, $Parametros)
    {
       $this->preparedStatements("insert into {$Tabela} values({$Condicao})", $Parametros);
       return $this->Crud;
    }

     #Select no banco de dados
     public function selectDB($Campos, $Tabela, $Condicao, $Parametros)
     {
        $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Parametros);
        return $this->Crud;
     }

     #Delete no banco de dados
     public function deleteDB($Tabela, $Condicao, $Parametros){
         $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Parametros);
         return $this->Crud;
     }

     #Update no banco de dados
     public function updateDB($Tabela, $Set, $Condicao, $Parametros){
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Parametros);
        return $this->Crud;
    }
}