<?php
// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $banco = "loja";

$servidor = "robb0547.publiccloud.com.br";
$usuario = "minha_sala39";
$senha = "S3nac_sala39";
$banco = "minhavilacarrao_sala39";


$mysql = new mysqli($servidor,$usuario,$senha,$banco);

if($mysql -> connect_errno){
    echo "Falha ao connectar:(" . $mysql->connect_errno .") "
    . $mysql->connect_error;

}else
echo "";