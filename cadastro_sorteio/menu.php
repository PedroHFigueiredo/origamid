<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>

</head>
<body>
<a class="navbar-brand" href="index.php"><img src="imagens/logotipo.png" width="180px"></a>  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listar_visitantes.php">Visitantes</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabelas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <!--<li><a class="dropdown-item" href="listar_categorias.php">Categorias</a></li>
            <li><a class="dropdown-item" href="listar_fornecedores.php">Fornecedores</a></li>-->
            <li><a class="dropdown-item" href="listar_usuarios.php">Usuários</a></li>
 


          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>