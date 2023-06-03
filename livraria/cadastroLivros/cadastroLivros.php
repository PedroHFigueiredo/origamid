<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
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
    </style>
    <title></title>
  </head>
  <body>
    <nav
      class="navbar bg-dark navbar-expand-lg border-bottom border-bottom-dark"
      data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
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
        while ($dado = $con->fetch_array()){ ?>

        
      
      <tbody>
        <tr>
          <th scope="row"><?php echo $dado['id_livro'] ?></th>
          <td><?php echo $dado['editora_cod_editora'] ?></td>
          <td><?php echo $dado ['estoque_cod_editora']?></td>
          <td><?php echo $dado ['nome_livro']?></td>
          <td><?php echo $dado ['auto_livro']?></td>
          <td><?php echo  number_format($dado ['preco_livro'],2,",",".");?></td>
          <td><?php echo $dado ['categoria']?></td>
          <td><?php echo $dado ['isbn']?></td>
          <td><?php echo $dado ['ano']?></td>
        </tr>

        <?php } 
        ?>
      </tbody>
    </table>
    <!-- Button trigger modal -->
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#exampleModal"
    >
      Cadastrar novo livro
    </button>
    

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Livro</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="inserir.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nome"/>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Autor</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="autor"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Preço</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="preco"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="exampleInputEmail1" class="form-label" >Categoria</label>
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
                      <label for="exampleInputEmail1" class="form-label" >ISBN</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="isbn"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Ano</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="ano"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Codigo Editora</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="codigoEditora"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Estoque</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" name="estoque"/>
                    </div>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

   
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>