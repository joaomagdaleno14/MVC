<?php
if(isset($_POST['ID'])){$this->ID=$_POST['ID'];}
if(isset($_POST['Nome'])){$this->Nome=filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Sobrenome'])){$this->Sobrenome=filter_input(INPUT_POST, 'Sobrenome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['CPF'])){$this->CPF=filter_input(INPUT_POST, 'CPF',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Dt_Nascimento'])){$this->Dt_Nascimento=filter_input(INPUT_POST, 'Dt_Nascimento',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Telefone'])){$this->Telefone=filter_input(INPUT_POST, 'Telefone',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}
if(isset($_POST['Email'])){$this->Email=filter_input(INPUT_POST, 'Email',FILTER_VALIDATE_EMAIL);}
if(isset($_POST['Senha'])){$this->Senha=$_POST['Senha']; $this->hashSenha='';}
if(isset($_POST['SenhaConf'])){$this->SenhaConf=$_POST['SenhaConf'];}
$token=bin2hex(random_bytes(64));