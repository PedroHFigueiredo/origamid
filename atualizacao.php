<?php
include_once("conexao.php");

if (count($_POST) > 0) {
    mysqli_query($mysql, "UPDATE livros set isbn='" . $_POST['isbn'] . "', titulo='" . $_POST['titulo'] . "' ,autor='" . $_POST['autor'] . "',paginas='" . $_POST['paginas'] .
        "', preco='" . $_POST['preco'] . "' WHERE isbn ='" . $_POST['isbn'] . "'");
    $message = "Record Moified Successfully";
}

echo "$message";

$result = mysqli_query($mysql, "SELECT * FROM livros WHERE isbn='" . $_POST['isbn'] . "'");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<table class="table table-striped">
    <thead>
        <tr>
            <td>Isbn</td>
            <td>Titulo</td>
            <td>Autor</td>
            <td>Paginas</td>
            <td>Preço</td>
        </tr>
    </thead>

    <tbody class="table table-striped">
        <?php
        while ($dado = $result->fetch_array()) {

        ?>

            <tr>
                <td><?php echo $dado['isbn']; ?></td>
                <td><?php echo $dado['titulo']; ?></td>
                <td><?php echo $dado['autor']; ?></td>
                <td><?php echo $dado['paginas']; ?></td>
                <td><?php echo $dado['preco']; ?></td>
            </tr>

        <?php } ?>
    </tbody>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>