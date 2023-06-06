<?php include_once("conexxao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>

<body>

    <?php
    $query = "SELECT editora_cod_editora, estoque_cod_editora, nome_livro, auto_livro, preco_livro, categoria, isbn, ano FROM livro WHERE id_livro = $id";

    $con = $mysql->query($query) or die($mysql->error);
    ?>
    <?php
    while ($dado = $con->fetch_array()) { ?>
        <form action="atualizar_usuarios.php" method="POST" class="table ">
            <input type="hidden" name="id_usuario" value="<?= $id ?>" scope="col">
            <input type="text" name="editora_cod_editora" value="<?= $dado["editora_cod_editora"] ?>" scope="col">
            <input type="text" name="estoque_cod_editora" value="<?= $dado["estoque_cod_editora"] ?>" scope="col">
            <input type="text" name="nome_livro" value="<?= $dado["nome_livro"] ?>" scope="col">
            <input type="text" name="auto_livro" value="<?= $dado["auto_livro"] ?>" scope="col">
            <input type="text" name="preco_livro" value="<?= $dado["preco_livro"] ?>" scope="col">
            <input type="text" name="categoria" value="<?= $dado["categoria"] ?>" scope="col">
            <input type="text" name="isbn" value="<?= $dado["isbn"] ?>" scope="col">
            <input type="text" name="ano" value="<?= $dado["ano"] ?>" scope="col">
            <input type="submit" value="Atualizar" class="btn btn-primary">
        </form>
    <?php
    }
    ?>



</body>

</html>