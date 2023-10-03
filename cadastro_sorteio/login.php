<?php
$usuario = $_POST['usuario'];
$senha =  $_POST['senha'];
include 'conexao.php';

$verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE mail_usuario = '$usuario' AND senha_usuario = '$senha'") or die("erro ao selecionar");

  if (mysqli_num_rows($verifica)<=0){
	echo"<script language='javascript' type='text/javascript'>
	alert('Login e/ou senha incorretos');window.location
	.href='index.php';</script>";
	die();
  }else{
	setcookie("login",$usuario);
	header("Location:principal.php");
  }



  ?>