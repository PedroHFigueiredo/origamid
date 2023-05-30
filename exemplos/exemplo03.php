<?php 
class funcionario{
    var $nome;
    var $sobrenome;

    function add(){
        return "nome " . $this->nome;
    }

}

$teste  = new funcionario();
$teste->nome="Pedro";
$teste->sobrenome="Henrique";

// echo $teste->nome;
echo $teste->add();




?>