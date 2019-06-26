<?php
namespace Classes;
include_once(DIRREQ."/app/models/ClassCadastroCrud.php");
use Models\ClassCadastroCrud;
class ClassValidate{

    private $Erro=[];
    private $cadastro;

    public function __construct()
    {
        $this->cadastro=new ClassCadastroCrud();
    }
    
    public function getErro(){
        return $this->Erro;
    }

    public function setErro($Erro){
        array_push($this->Erro,$Erro);
    }

    //Validar se os campos desejados foram preenchidos
    public function validateFields($par){
        $i=0;
        foreach ($par as $key => $value){
            if(empty($value)){
                $i++;
            }
        }

        if($i==0){
            return true;
        }else{
            $this->setErro("Preencha todos os dados!");
            return false;
        }

    }
    
    //Validação se o dado é um email
    public function validateEmail($par){
        if(filter_var($par, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            $this->setErro("Email inválido!");
            return false;
        }
    }

    //Validar se existe o email no banco de dados
    public function validateIssetEmail($Email, $action=null){

    }

    // //Validação se o dado é uma data
    // public function validateData($par){
    //     $data=\DateTime::createFromFormat("d/m/Y",$par);
    //     if(($data) && ($data->format("d/m/Y") == $par)){
    //         return true;
    //     }else{
    //         $this->setErro("Data invalida!");
    //         return false;
    //     }
    // }
    //validação se o dado é um cpf real
    public function validateCPF($par){
        $cpf = preg_replace('/[^0-9]/', '', (string) $par);
	// Valida tamanho
	if (strlen($cpf) != 11){
        $this->setErro("CPF inválido!");
		return false;

    }

	// Calcula e confere primeiro dígito verificador
	for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
		$soma += $cpf{$i} * $j;
	    $resto = $soma % 11;
    if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto)){
        $this->setErro("CPF inválido!");
		return false;
    }

	// Calcula e confere segundo dígito verificador
	for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
		$soma += $cpf{$i} * $j;
        $resto = $soma % 11;
        return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
    }

    //Validação final do cadastro
    public function validateFinalCad($arrVar){
        $this->cadastro->insertCad($arrVar);
    }

}

   