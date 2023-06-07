<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <style>
    .estrutura {
      margin: 0 auto;
      width: 500px;
    }

    h2 {
      text-align: center;
    }

    /* form {
        margin: 0;
        background: #f7f7f7;
        border: 1px solid #e7e7e7;
        padding: 20px;
        border-radius: 4px;
        display: grid;
        box-shadow: 20px 20px 10px #e7e7e7;
      }  */

    .table {
      width: 80%;
      margin: 0 auto;
    }

    .btn {
      margin-left: 85%;
    }
  </style>
  <title></title>
</head>

<body>
  <nav class="navbar bg-dark navbar-expand-lg border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID Livro</th>
        <th scope="col">Codigo</th>
        <th scope="col">Estoque</th>
        <th scope="col">Nome</th>
        <th scope="col">Autor</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        <th scope="col">ISBN</th>
        <th scope="col">Ano</th>

      </tr>
    </thead>

    <?php
    include_once("conexxao.php");
    $consulta = "SELECT * FROM livro";
    $con = $mysql->query($consulta) or die($mysqli->error);
    $id = 0;
    ?>
    <?php
    while ($dado = $con->fetch_array()) { ?>



      <tbody>
        <tr>
          <th scope="row"><?php echo $dado['id_livro'] ?></th>
          <td><?php echo $dado['editora_cod_editora'] ?></td>
          <td><?php echo $dado['estoque_cod_editora'] ?></td>
          <td><?php echo $dado['nome_livro'] ?></td>
          <td><?php echo $dado['auto_livro'] ?></td>
          <td><?php echo  number_format($dado['preco_livro'], 2, ",", "."); ?></td>
          <td><?php echo $dado['categoria'] ?></td>
          <td><?php echo $dado['isbn'] ?></td>
          <td><?php echo $dado['ano'] ?></td>
          <td><a href="editar.php?id=<?php echo $dado['id_livro'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg></a>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $dado['id_livro'] ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
              </svg> </a>
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $dado['id_livro'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php echo "Deseja Excluir" ?>
                    <?php echo $dado['nome_livro'] ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="excluir.php?id=<?php echo $dado['id_livro'] ?>">Excluir</a>
                  </div>
                </div>
              </div>
            </div>
          </td>

        </tr>

      <?php }
      ?>
      </tbody>
  </table>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn b-6" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Livro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="inserir.php" method="POST">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nome" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Autor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="autor" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Preço</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="preco" />
                </div>
              </div>
              <div class="col-md-6">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <select size="1" name="categoria" class="form-control">
                  <option value="categoria"></option>
                  <option value="biografias">Biografias</option>
                  <option value="comportamento">Comportamento</option>
                  <option value="contos">Contos</option>
                  <option value="criticaLiteraria">Crítica Literária</option>
                  <option value="ficcaoCientifica">Ficção Científica</option>
                  <option value="folclore">Folclore</option>
                  <option value="genealogia">Genealogia</option>
                </select>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">ISBN</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="isbn" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Ano</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="ano" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Codigo Editora</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="codigoEditora" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Estoque</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" name="estoque" />
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

  </script>
</body>

</html>