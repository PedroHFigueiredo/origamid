<?php

include("conexao.php");

$query = "DELETE FROM livros WHERE isbn='" . $_POST ["isbn"] ."'";
if (mysqli_query($mysql, $query))
{

    /*header (location: deletar.php)*/
    $message = "Excluido com sucesso";
}
else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

$result = mysqli_query($mysql,"SELECT * FROM livros WHERE isbn='" .$_POST['isbn']."'");

?>