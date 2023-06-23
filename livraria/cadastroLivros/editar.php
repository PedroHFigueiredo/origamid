<?php include_once("../conexao/conexxao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <title>Editar Usuario</title>
    <style>
        
        .estrutura {
            margin: 100px auto;
            width: 500px;
            box-shadow: 20px 20px 10px #e7e7e7;
            border: 1px solid #e7e7e7;
            display: grid;
            border-radius: 4px;
            padding: 20px;
            background: #f7f7f7;
            font-family: 'Slabo 27px', serif;
        }
        h2{
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    $id = $_GET['id'];
    $query = "SELECT id_livro,editora_cod_editora, estoque_cod_editora, nome_livro, auto_livro, preco_livro, categoria, isbn, ano FROM livro WHERE id_livro = $id ";

    $con = $mysql->query($query) or die($mysql->error);
    ?>
    <?php
    while ($dado = $con->fetch_array()) { ?>
        <div class="estrutura">
            <form action="atualizar_livro.php" method="POST" class="table ">
                <h2>Atualização de cadastro</h2>

                <input type="hidden" name="id_livro" value="<?= $dado["id_livro"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">Editora</label>
                <input type="text" name="editora_cod_editora" value="<?= $dado["editora_cod_editora"] ?>" scope="col" class="form-control">
                
                <label for="exampleInputEmail1" class="form-label">Estoque</label>
                <input type="text" name="estoque_cod_editora" value="<?= $dado["estoque_cod_editora"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">Nome Do livro</label>
                <input type="text" name="nome_livro" value="<?= $dado["nome_livro"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">Autor</label>
                <input type="text" name="auto_livro" value="<?= $dado["auto_livro"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">Preço</label>
                <input type="text" name="preco_livro" value="<?= $dado["preco_livro"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <input type="text" name="categoria" value="<?= $dado["categoria"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">ISBN</label>
                <input type="text" name="isbn" value="<?= $dado["isbn"] ?>" scope="col" class="form-control">

                <label for="exampleInputEmail1" class="form-label">Ano</label>
                <input type="text" name="ano" value="<?= $dado["ano"] ?>" scope="col" class="form-control">

                <input type="submit" value="Atualizar" class="btn btn-primary m-1">
            </form>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

    </script>
</body>

</html>