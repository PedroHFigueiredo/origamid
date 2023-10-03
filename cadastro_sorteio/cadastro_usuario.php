<html>
<head>
  <meta charset="utf-8">
  <title>Cadastro de Usuário- Inclusão</title>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php  
include 'menu.php';
?>
<div class="container" style="width: 400px; margin-top: 40px">
<h3>Cadastro de Usuários</h3>
<br>

<form action="_insert_usuario.php" method="post">
  <div class="form-group">
      <label>Nome do Usuário</label>
      <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
  </div>
  <div class="form-group">
      <label>E-mail</label>
      <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="E-mail Usuário">
  </div>
  <div class="form-group">
      <label>Senha do Usuário</label>
      <input type="password" name="txtSenha" id="txtSenha" class="form-control" required autocomplete="off" placeholder="Senha Usuário">
  </div>
  <div class="form-group">
      <label>Repetir senha</label>
      <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir senha usuario" oninput="validaSenha(this)">
      <small>A senha deve ser igual a de cima.</small>
  </div>
  <div class="form-group">
      <label>Nível de Acesso</label>
      <select class="form-control" name="nivelusuario" div="nivelusuario">
          <option value="1">Administrador</option>
          <option value="2">Funcionário</option>
          <option value="3">Conferente</option>
          
      </select>
  </div>

  <div style="text-align: right;">
    <button type="submit" id="botao" class="btn btn-sm btn-primary">Gravar</button>
  </div>

</form>
</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
function validaSenha (input){ 
  if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>
</html>