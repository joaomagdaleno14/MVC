<?php
#Arquivos diretórios raizes
$PastaInterna="MVC/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
     define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{ 
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#Diretórios Especificos
define('DIRADM',DIRPAGE."public/admin/");
define('DIRAUDIO',DIRPAGE."public/audio/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRDESIGN',DIRPAGE."public/design/");
define('DIRFONTES',DIRPAGE."public/fontes/");
define('DIRIMG',DIRPAGE."public/img/");
define('DIRJS',DIRPAGE."public/js/");
define('DIRVIDEO',DIRPAGE."public/video/");

#Acesso ao banco de dados
define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");
