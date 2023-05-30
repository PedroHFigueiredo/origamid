<?php
include_once("conexao.php");
if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome', '$email', '$senha')";
    if ($mysql->query($sql)){
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysql);
       ;
    }
}