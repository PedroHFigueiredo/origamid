<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style type="text/css">
	#tamanhoContainer{
		width: 500px;
	}

	#botao2{
		background-color: #FF1168;   /*cor de fundo*/
		color: #ffffff; /*cor da letra*/
		font-weight: bold;
	}

</style>
</head>
<body>
<?php  
include 'menu.php';
include 'conexao.php';
?>
<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4>Formulário de cadastro</h4>

<form action="_inserir_visitante.php" method="post" style="margin-top: 20px">


  <div class="form-group">
    <label>Nome do Visitante</label>
    <input type="text" class="form-control" name="nome" placeholder="Insira o Nome do Visitante" autocomplete="off" required>
    
  </div>
  

  <div class="form-group">
    <label>E-mail</label>
    <input type="email" class="form-control" name="email" placeholder="Insira o Email">
    
  </div>


<div style="text-align: right;">
<p>&nbsp;</p>
<button type="submit" id="botao" class="btn btn-primary btn-small">Cadastrar</button>
</div>


</form>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>