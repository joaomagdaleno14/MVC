<?php
namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{
    
    private $Db;

    #Cadastra clientes no sistema
    protected function cadastroClientes($Nome, $Sobrenome, $CPF, $Dt_Nascimento, $Telefone, $Email, $Senha){
        $ID=0;
        $this->Db=$this->conexaoDB()->prepare("insert into cliente values(:ID, :Nome, :Sobrenome, :CPF, :Dt_Nascimento, :Telefone, :Email, :Senha)");
        $this->Db->bindParam(":ID",$ID,\PDO::PARAM_INT);
        $this->Db->bindParam(":Nome",$Nome,\PDO::PARAM_STR);
        $this->Db->bindParam(":Sobrenome",$Sobrenome,\PDO::PARAM_STR);
        $this->Db->bindParam(":CPF",$CPF,\PDO::PARAM_STR);
        $this->Db->bindParam(":Dt_Nascimento",$Dt_Nascimento,\PDO::PARAM_STR);
        $this->Db->bindParam(":Telefone",$Telefone,\PDO::PARAM_STR);
        $this->Db->bindParam(":Email",$Email,\PDO::PARAM_STR);
        $this->Db->bindParam(":Senha",$Senha,\PDO::PARAM_STR);
        $this->Db->execute();
    }
    
    // #Acesso ao banco de dados com seleção
    // protected function selecionaClientes($Nome, $Sexo, $Cidade){
    //     $Nome='%'.$Nome.'%';
    //     $Sexo='%'.$Sexo.'%';
    //     $Cidade='%'.$Cidade.'%';
    //     $BFetch=$this->Db=$this->conexaoDB()->prepare("select * from teste where Nome like :Nome and Sexo like :Sexo and Cidade like :Cidade");
    //     $BFetch->bindParam(":Nome",$Nome,\PDO::PARAM_STR);
    //     $BFetch->bindParam(":Sexo",$Sexo,\PDO::PARAM_STR);
    //     $BFetch->bindParam(":Cidade",$Cidade,\PDO::PARAM_STR);
    //     $BFetch->execute();

    //     $I=0;
    //     while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
    //         $Array[$I]=['ID'=>$Fetch['ID'],'Nome'=>$Fetch['Nome'],'Sexo'=>$Fetch['Sexo'],'Cidade'=>$Fetch['Cidade']];
    //         $I++;
    //     }
    //     return $Array;
    // }


    // #Deletar direto do banco
    // protected function deletarClientes($ID){
    //     $BFetch=$this->Db=$this->conexaoDB()->prepare("delete from teste where ID=:ID");
    //     $BFetch->bindParam(":ID",$ID,\PDO::PARAM_INT);
    //     $BFetch->execute();
    // }

    // #Atualização direto do BD
    // protected function atualizarClientes($ID, $Nome, $Sexo, $Cidade){
    //     $BFetch=$this->Db=$this->conexaoDB()->prepare("update test set  Nome=:Nome, Sexo=:Sexo, Cidade=:Cidade where ID=:ID");
    //     $BFetch->bindParam(":ID",$ID,\PDO::PARAM_INT);
    //     $BFetch->bindParam(":Nome",$Nome,\PDO::PARAM_STR);
    //     $BFetch->bindParam(":Sexo",$Sexo,\PDO::PARAM_STR);
    //     $BFetch->bindParam(":Cidade",$Cidade,\PDO::PARAM_STR);
    //     $BFetch->execute();
    // }

}