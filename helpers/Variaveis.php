<?php
if(isset($_POST['ID'])){$ID=$_POST['ID'];}
if(isset($_POST['Nome'])){$Nome=filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Sobrenome'])){$Sobrenome=filter_input(INPUT_POST, 'Sobrenome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['CPF'])){$CPF=filter_input(INPUT_POST, 'CPF',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Dt_Nascimento'])){$Dt_Nascimento=filter_input(INPUT_POST, 'Dt_Nascimento',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Telefone'])){$Telefone=filter_input(INPUT_POST, 'Telefone',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Email'])){$Email=filter_input(INPUT_POST, 'Email',FILTER_VALIDATE_EMAIL);}
if(isset($_POST['Senha'])){$Senha=$_POST['Senha']; $hashSenha='';}
if(isset($_POST['SenhaConf'])){$SenhaConf=$_POST['SenhaConf'];}
$token=bin2hex(random_bytes(64));
$arrVar=[
    "Nome"=>$Nome,
    "Sobrenome"=>$Sobrenome,
    "CPF"=>$CPF,
    "Dt_Nascimento"=>$Dt_Nascimento,
    "Telefone"=>$Telefone,
    "Email"=>$Email,
    "Senha"=>$Senha,
    "hashSenha"=>$hashSenha,
    "token"=>$token,
];