<?php include 'protegido.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Painel</title>
  
</head>
<body>

<nav class="navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Painel Edição</a>
    <form class="d-flex" role="search">
      <p class="text-white"><?php echo $_SESSION['nome_login'];?></p>
      <a href="logout.php">Sair</a>

      <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button> -->
    </form>
  </div>
</nav>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Situação</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  include_once("conexao.php");
     $consulta = "SELECT * FROM usuarios";
     $con = $mysql->query($consulta) or die($mysqli->error);
     $id = 0;
  ?>
  <?php  while ($dado = $con->fetch_array()) { ?>
    <tr>
      <th scope="row"><?php echo $dado['id_usuario']?></th>
      <td><?php echo $dado['nome']?></td>
      <td><?php echo $dado['email']?></td>
      <td><a href="editar.php?id=<?=$dado['id_usuario']?>">Editar</a>
       <p  data-bs-toggle="modal" data-bs-target="#exampleModal<?= $dado['id_usuario']?>" >Excluir</p>
       <!-- Modal -->

<div class="modal fade" id="exampleModal<?= $dado['id_usuario']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      deseja excluir 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <a  href="excluir.php?id=<?= $dado['id_usuario']?>" type="button" class="btn btn-primary'">Excluir</a>
      </div>
    </div>
  </div>
</div>
      </td>



    </tr>
    <?php } ?>
  </tbody>
</table>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastrar Usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="inser.php" class="mb-3 estrutura" method="POST">
        <div>
        <label for="#" class="form-label">Nome:</label>
        <input type="text"  class="form-control" name="nome" >
    </div>
    <div>
        <label for="#" class="form-label">Email:</label>
        <input type="text"  class="form-control" name="email" >
    </div>
    <div>
        <label for="" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha">
    </div>

<div>
    <input type="submit" placeholder=Enviar class="btn btn-primary p-6 mt-2">
</div>

    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

<main>
    





</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script> 
</body>
</html>