<?php
    include("../Includes/Variaveis.php");
    include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$Crud->insertDB("avaliacao","?,?",array($ID,$Radio)
);

echo "Voto realizado com sucesso!";