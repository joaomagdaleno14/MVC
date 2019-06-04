<?php
namespace App\Controller;

class ControllerCarros{
    public function valorCarro($Tipo , $Motor){
        if($Tipo == 'veiculos' && $Motor == '1'){
            $Valor = '1000,00';
        }elseif($Tipo == 'veiculos' && $Motor=='2'){
            $Valor='2000,00';
        }elseif($Tipo == 'caminhao' && $Motor == '1'){
            $Valor = '5000,00';
        }elseif($Tipo == 'caminhao' && $Motor == '2'){
            $Valor = '10000,00';
        }
        echo "O tipo de carro é {$Tipo} com motor {$Motor} e seu valor é {$Valor}";
    }
}
