<?php

namespace App\Controllers;
//session_start();
include_once(DIRREQ."/src/class/ClassRender.php");
include_once(DIRREQ."/app/models/ClassCadastro.php");
include_once(DIRREQ."/src/Traits/TraitUrlParser.php");
include_once(DIRREQ."/src/class/ClassValidate.php");
use \Src\Classes\ClassRender;
use \App\Models\ClassCadastro;

class ControllerCadastro extends ClassCadastro{

    protected $ID;
    protected $Nome;
    protected $Sobrenome;
    protected $CPF;
    protected $Dt_Nascimento;
    protected $Telefone;
    protected $Email;
    protected $Senha;
    protected $hashSenha;
    protected $SenhaConf;
    protected $token;


    use \Src\Traits\TraitUrlParser;
    
    public function __construct(){

        if(count($this->parseUrl())==1){
            $Render=new ClassRender();
            $Render->setTitle("Cadastro");
            $Render->setDescription("Faça seu cadastro.");
            $Render->setKeywords("cadastro de clientes, cadastro");
            $Render->setDir("cadastro");
            $Render->renderLayout();
        }
    }
//     #Receber as variaveis 
    public function recVariaveis(){
        if(isset($_POST['ID'])){$this->ID=$_POST['ID'];}
        if(isset($_POST['Nome'])){$this->Nome=filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
        if(isset($_POST['Sobrenome'])){$this->Sobrenome=filter_input(INPUT_POST, 'Sobrenome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
        if(isset($_POST['CPF'])){$this->CPF=filter_input(INPUT_POST, 'CPF',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
        if(isset($_POST['Dt_Nascimento'])){$this->Dt_Nascimento=filter_input(INPUT_POST, 'Dt_Nascimento',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
        if(isset($_POST['Telefone'])){$this->Telefone=filter_input(INPUT_POST, 'Telefone',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
        if(isset($_POST['Email'])){$this->Email=filter_input(INPUT_POST, 'Email',FILTER_VALIDATE_EMAIL);}
        if(isset($_POST['Senha'])){$this->Senha=$_POST['Senha']; $this->hashSenha='';}
        if(isset($_POST['SenhaConf'])){$this->SenhaConf=$_POST['SenhaConf'];}
        $this->token=bin2hex(random_bytes(64));
    }


    #chamar o metodo de cadastro da class
    public function cadastrar(){
        $this->recVariaveis();
        $validate=new \Classes\ClassValidate();
        $validate->validateFields(array($_POST));
        $validate->validateEmail($this->Email);
        //$validate->validateData($this->Dt_Nascimento);
        $validate->validateCPF($this->CPF);
        var_dump($validate->getErro());
        parent::cadastroClientes($this->Nome, $this->Sobrenome, $this->CPF, $this->Dt_Nascimento, $this->Telefone, $this->Email, $this->Senha);
        echo "Cadastro realizado com sucesso!";
    }

    // #Selecionar e exibir os dados do banco
    // public function seleciona(){
    //     $this->recVariaveis();
    //     $B=$this->selecionaClientes($this->Nome, $this->Sexo, $this->Cidade);

    //     echo "
    //         <form name'FormDeletar' id='FormDeletar' action='".DIRPAGE."cadastro/deletar' method='post'>
    //         <table border='1'>
    //             <tr>
    //                 <td>Ação</td>
    //                 <td>Nome</td>
    //                 <td>Sexo</td>
    //                 <td>Cidade</td>
    //             </tr>
    //     ";

    //         foreach($B as $C){
    //             echo "
    //             <tr>
    //                 <td><input type='checkbox' name='ID[]' id='ID' value='$C[ID]'><img class='ImageEdit' rel='$C[ID]' src='".DIRIMG."edit.png' alt='Editar'></td>
    //                 <td>$C[Nome]</td>
    //                 <td>$C[Sexo]</td>
    //                 <td>$C[Cidade]</td>
    //             </tr>
    //             ";
    //         }

    //         echo "
    //             </table>
    //             <input type='submit' value='Deletar'>
    //             </form>
    //         ";

    // }
    
    // #Deletar dados
    // public function deletar(){
    //     $this->recVariaveis();
    //     foreach($this->ID as $IdDeletar){
    //         $this->deletarClientes($IdDeletar);
    //     }
    // }
    
    // #Puxando dados do BD
    // public function puxaDB($ID){
    //     $this->recVariaveis();
    //     $B=$this->selecionaClientes($this->Nome, $this->Sexo, $this->Cidade);

    //     foreach($B as $C){
    //         if($C['ID'] == $ID){
    //             $Nome= $C['Nome'];
    //             $Sexo= $C['Sexo'];
    //             $Cidade= $C['Cidade'];
    //         }
    //     }

    //     echo "
    //     <form name='FormAtualizar' id='FormAtualizar' action='".DIRPAGE."cadastro/atualizar' method='post'>
    //     <input type='hidden' name='ID' id='ID' value='{$ID}'><br>
    //     Nome:<input type='text' name='Nome' id='Nome' value='$Nome'><br>
    //     <select name='Sexo' id='Sexo'>
    //         <option value='$Sexo'>$Sexo</option>
    //         <option value='Masculino'>Masculino</option>
    //         <option value='Feminino'>Feminino</option>
    //     </select><br>
    //     Cidade:<input type='text' name='Cidade' id='Cidade' value='$Cidade'><br>
    //     <input type='submit' value='Atualizar'>
    //         </form>
    //     ";
    // }

    // public function atualizar(){
    //     $this->recVariaveis();
    //     $this->atualizarClientes($this->ID, $this->Nome, $this->Sexo, $this->Cidade);
    //     echo "Usuário atualizado com sucesso!";
    // }
}

