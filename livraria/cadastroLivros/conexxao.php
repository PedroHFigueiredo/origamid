<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "livraria";

$mysql = new mysqli($servidor,$usuario,$senha,$banco);

if($mysql -> connect_errno){
    echo "Falha ao connectar:(" . $mysql->connect_errno .") "
    . $mysql->connect_error;

}else
echo "";