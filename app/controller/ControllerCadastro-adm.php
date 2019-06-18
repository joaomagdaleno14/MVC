<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();

if($Acao=='Cadastrar'){
    $Crud->insertDB("cliente","?,?,?,?",array($ID,$Nome,$Sexo,$Cidade));
    echo "Cadastro realizado com Sucesso!";
}else{
    $Crud->updateDB("cliente","Nome=?,Sexo=?,Cidade=?","id=?",array($Nome, $Sexo,$Cidade,$ID));
    echo "Edição realizada com Sucesso!";
}
