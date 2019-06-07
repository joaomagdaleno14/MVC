<?php

namespace App\Controller;
//session_start();
include_once("../src/class/ClassRender.php");
include_once("../app/model/ClassCadastro.php");
use Src\Classes\ClassRender;
use App\Model\ClassCadastro;


class ControllerCadastro extends ClassCadastro{

    protected $Nome;
    protected $Sexo;
    protected $Cidade;
    
    public function __construct(){

        $Render=new ClassRender();
        $Render->setTitle("Cadastro");
        $Render->setDescription("Faça seu cadastro.");
        $Render->setKeywords("cadastro de clientes, cadastro");
        $Render->setDir("cadastro");
        $Render->renderLayout();
    }
    #Receber as variaveis 
    public function recVariaveis(){
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
    #Selecionar e exibir os dados do banco
    public function seleciona(){
        $this->recVariaveis();
        $B=$this->selecionaClientes($this->Nome, $this->Sexo, $this->Cidade);

        echo "
            <table border='1'>
                <tr>
                    <td>Nome</td>
                    <td>Sexo</td>
                    <td>Cidade</td>
                </tr>
        ";

            foreach($B as $C){
                echo "
                <tr>
                    <td>$C[Nome]</td>
                    <td>$C[Sexo]</td>
                    <td>$C[Cidade]</td>
                </tr>
                ";
            }

            echo "
                </table>
            ";

    }

    

}