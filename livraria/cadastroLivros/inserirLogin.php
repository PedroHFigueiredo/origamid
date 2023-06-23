<?php
include_once("../conexao/conexxao.php");
if($_POST){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    echo $email;
    $sql = "INSERT INTO tbl_login (email,senha) VALUES ('$email', '$senha')";
    if ($mysql->query($sql)){
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysql);
       ;
    }
}