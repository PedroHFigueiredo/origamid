<?php

include 'conexao.php';
$id = $_GET['id'];



$sql = "delete from pessoas where id = '$id'";

$editar = mysqli_query($conexao,$sql);


?>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
<center>
<h4>Visitante Excluido com Sucesso</h4>
</center>
<div style="padding-top: 20px">
<center>	
<a href="listar_visitantes.php" role="button" class="btn btn-sm btn-primary btn">Voltar</a>
</center>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>