<?php

include_once("conexao.php");

if($_GET["id"]){
    $id_usuario = $_GET["id"];

    $query = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
    $excluir = mysqli_query($mysql, $query);
    
    if($excluir) {
        echo"<script>alert('Dados Excluido')</script>";
             echo"<script>window.location.href='painel.php';</script>";

    } else {
        echo "Erro ao excluir.";
    }
} else{

    echo "Usuario Não encontrado";
}