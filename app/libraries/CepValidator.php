<?php
class CepValidator extends Illuminate\Validation\Validator {

    public function validateCep($attribute, $value, $parameters)
    {
        $cep = $value;
        /*
        Etapa 1: Cria um array com apenas os digitos numéricos,
        isso permite receber o cpf em diferentes formatos
        como "000.000.000-00", "00000000000", "000 000 000 00"
        */
        $j=0;
        for($i=0; $i<(strlen($cep)); $i++)
        {
            if(is_numeric($cep[$i]))
            {
                $num[$j]=$cep[$i];
                $j++;
            }
        }
        
        if($j==0)
            return false;
        
        /*
        Etapa 2: Conta os dígitos,
        um cep válido possui 8 dígitos numéricos.
        */
        if(count($num)!= 8)
        {
            return false;
        }
        /*
        Etapa 3: Aplica expressão regular 
        para validar cepf.
        */
        if(!isset($isCpfValid))
        {
            $j=11;
            for($i=0; $i<10; $i++)
            {
                $multiplica[$i]=$num[$i]*$j;
                $j--;
            }
            $soma = array_sum($multiplica);
            $resto = $soma%11;
            if($resto<2)
            {
                $dg=0;
            }
            else
            {
                $dg=11-$resto;
            }
            if($dg!=$num[10])
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        return true;
    }
    
    protected function replaceCEP($message, $attribute, $rule, $parameters)
    {
        if(count($parameters) > 0)
            return str_replace(':cep', $parameters, $message);
        else
            return $message;
    } 
}