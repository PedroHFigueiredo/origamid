<?php
include_once("conexao.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo"<script>alert('Preencha seu E-mail')</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo"<script>alert('Preencha sua senha')</script>";
    } else {
        $email = $mysql->real_escape_string($_POST['email']);
        $senha = $mysql->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND  senha = '$senha'";
        $sql_query = $mysql->query($sql_code) or die("Falha na execução" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            };

            $_SESSION['id_login'] = $usuario['id_usuario'];
            $_SESSION['email_login'] = $usuario['email'];
            $_SESSION['nome_login'] = $usuario['nome'];

// echo $_SESSION['nome_login'];
            header("Location: painel.php");

        }else{
            echo"<script>alert('Login Invalido')</script>";
            echo"<script>window.location.href='login.php';</script>";
            
    }
}}
