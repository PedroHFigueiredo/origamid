<?php

$chave = $_POST['chave'];
$busca = $_POST['busca'];

if (strlen($busca) < 2) {
    echo "O tremo a ser buscado deve ter no minimo 2 caracteres !";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="text-center">Livraria de Aluno</h1>
<br>
    <?php
    include("conexao.php");

    $consulta = "SELECT * FROM livros WHERE $chave like '%$busca%'";
    $con = $mysql->query($consulta) or die($mysqli->error);

    ?>
    <table class="table">
        <thead class="table-dark">
            <td><b>Isbn</b></td>
            <td><b>titulo</b></td>
            <td><b>autor</b></td>
            <td><b>paginas</b></td>
            <td><b>Peço</b></td>
        </thead>
        <?php
        while ($dado = $con->fetch_array()) { ?>

            <tr>
                <td><?php echo $dado["isbn"]; ?></td>
                <td><?php echo $dado["titulo"]; ?></td>
                <td><?php echo $dado["autor"]; ?></td>
                <td><?php echo $dado["paginas"]; ?></td>
                <td><?php echo $dado["preco"]; ?></td>
            </tr>

        <?php } ?>
    </table>
    <br>
    <p><a href="livros.html" class="btn btn-secondary btn-lg">Voltar</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"> </script>
        

</body>

</html>