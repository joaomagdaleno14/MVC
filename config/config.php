<?php
#Arquivos diretórios raizes
$PastaInterna="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}