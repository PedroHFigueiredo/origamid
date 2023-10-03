<!DOCTYPE html>
<html>
<head>
  <title>Login</title
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

<style type="text/css">
	#tamanho {
		width: 350px;
		-webkit-box-shadow: 10px 10px 25px -8px rgba(115,108,115,1);
		-moz-box-shadow: 10px 10px 25px -8px rgba(115,108,115,1);
		box-shadow: 10px 10px 25px -8px rgba(115,108,115,1);	

	}
</style>	

</head>
<body>
<center>	
<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding: 10px">
<img src="imagens/logotipo.png" width="300px">
<form method="POST" action="login.php">
    <div class="form-group">
    	<label>Usuário</label>
    	<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
    </div>
     <div class="form-group">
    	<label>Senha</label>
    	<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
    </div>
    <div style="text-align: right;">
    	<br/>
        <button type="submit" id="botao" class="btn btn-primary">Entrar</button>

        <div>&nbsp;</div>
    </div>  

</form>
</div>
</div>
</center>
<div style="margin-top: 10px">
<center>
  <small>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui</a></small>
</center>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>