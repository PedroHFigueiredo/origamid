<?php 

include_once("conexao.php");

$id = $_POST ["id_usuario"];
$nome = $_POST ["nome"];
$email = $_POST ["email"];

$query = "UPDATE usuarios SET nome = '$nome', 
                               email = '$email'
         WHERE id_usuario = $id";

         $atualizar = mysqli_query($mysql, $query);

         if($atualizar) {
             echo"<script>alert('Dados Atualizados')</script>";
             echo"<script>window.location.href='painel.php';</script>";
         } else{
             echo"Erro ao atualizar os dados
             <a href='editar.php?id=$id'>Voltar</a>";
             
         }