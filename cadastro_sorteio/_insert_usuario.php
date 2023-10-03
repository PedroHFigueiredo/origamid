<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha= $_POST['txtSenha'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios(nome_usuario,mail_usuario,senha_usuario,nivel_usuario,status) values ('$nomeusuario','$mail',sha1('$senha'),$nivel,'$status')";

$inserir = mysqli_query($conexao, $sql);

?>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
<center>
<h4>Usuário Adicionado com Sucesso</h4>
</center>
<div style="padding-top: 20px">
<center>	
<a href="principal.php" role="button" class="btn btn-sm btn-primary btn">Voltar</a>
</center>

</div>