<?php 
namespace Models;

class ClassCadastroCrud extends ClassCrud{

    public function InsertCad($arrVar){
        $this->InsertDB(
            "cliente",
            "?,?,?,?,?,?,?,?,?",
            array(
                0,
                $arrVar['Nome'],
                $arrVar['Sobrenome'],
                $arrVar['CPF'],
                $arrVar['Dt_Nascimento'],
                $arrVar['Telefone'],
                $arrVar['hashSenha'],
                'confirmation'
            )
        );
    }

}