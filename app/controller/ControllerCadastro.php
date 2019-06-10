<?php

namespace App\Controller;
//session_start();
include_once(DIRREQ."/src/class/ClassRender.php");
include_once(DIRREQ."/app/model/ClassCadastro.php");
include_once(DIRREQ."/src/Traits/TraitUrlParser.php");
use \Src\Classes\ClassRender;
use \App\Model\ClassCadastro;


class ControllerCadastro extends ClassCadastro{

    protected $ID;
    protected $Nome;
    protected $Sexo;
    protected $Cidade;

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
    #Receber as variaveis 
    public function recVariaveis(){
        if(isset($_POST['ID'])){$this->ID=$_POST['ID'];}
        if(isset($_POST['Nome'])){$this->Nome=filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_SPECIAL_CHARS);}
        if(isset($_POST['Sexo'])){$this->Sexo=filter_input(INPUT_POST, 'Sexo',FILTER_SANITIZE_SPECIAL_CHARS);}
        if(isset($_POST['Cidade'])){$this->Cidade=filter_input(INPUT_POST, 'Cidade',FILTER_SANITIZE_SPECIAL_CHARS);}
    }

    #chamar o metodo de cadastro da class
    public function cadastrar(){
        $this->recVariaveis();
        parent::cadastroClientes($this->Nome, $this->Sexo, $this->Cidade);
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