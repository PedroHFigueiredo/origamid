<?php 

class adicionaNumero
{   
    var $num1;
    var $num2;

    function addcalculo()
    {
        return($this->num1*$this->num2);
    }
}

    $add = new adicionaNumero();
    $add->num1=5;
    $add->num2=6;

    echo $add->addcalculo();

?>