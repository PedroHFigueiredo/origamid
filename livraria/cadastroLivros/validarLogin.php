<?php
include_once("../conexao/conexxao.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo"<script>alert('Preencha seu E-mail')</script>";
        echo"<script>window.location.href='login.php';</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo"<script>alert('Preencha sua senha')</script>";
        echo"<script>window.location.href='login.php';</script>";
    } else {
        $email = $mysql->real_escape_string($_POST['email']);
        $senha = $mysql->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM tbl_login WHERE email = '$email' AND  senha = '$senha'";
        $sql_query = $mysql->query($sql_code) or die("Falha na execução" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            
            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            };

            $_SESSION['id_login'] = $usuario['idLogin'];
            $_SESSION['email_login'] = $usuario['email'];
            $_SESSION['senha_login'] = $usuario['senha'];

// echo $_SESSION['nome_login'];
            header("Location: cadastroLivros.php");

        }else{
            echo"<script>alert('Login Invalido')</script>";
            echo"<script>window.location.href='login.php';</script>";
            
    }
}}
