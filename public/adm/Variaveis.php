<?php
if (isset($_POST['Acao'])){ $Acao=filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);}elseif (isset($_GET['Acao'])) {$Acao=filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);}else{$Acao="";}
if (isset($_POST['ID'])){ $ID=filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_SPECIAL_CHARS);}elseif (isset($_GET['ID'])) {$ID=filter_input(INPUT_GET, 'ID', FILTER_SANITIZE_SPECIAL_CHARS);}else{$ID=0;}
if (isset($_POST['Nome'])){ $Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);}elseif (isset($_GET['Nome'])) {$Nome=filter_input(INPUT_GET, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);}else{$Nome="";}
if (isset($_POST['Sexo'])){ $Sexo=filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);}elseif (isset($_GET['Sexo'])) {$Sexo=filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);}else{$Sexo="";}
if (isset($_POST['Cidade'])){ $Cidade=filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);}elseif (isset($_GET['Cidade'])) {$Cidade=filter_input(INPUT_GET, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);}else{$Cidade="";}
if (isset($_POST['Radio'])){ $Radio=filter_input(INPUT_POST, 'Radio', FILTER_SANITIZE_SPECIAL_CHARS);}elseif (isset($_GET['Radio'])) {$Radio=filter_input(INPUT_GET, 'Radio', FILTER_SANITIZE_SPECIAL_CHARS);}else{$Radio="";}
