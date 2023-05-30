<?php
include_once("conexao.php");
if($_POST){
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO livros (isbn,titulo,autor,paginas,preco) VALUES ('$isbn', '$titulo', '$autor', '$paginas', '$preco')";
    if ($mysql->query($sql)){
        echo "Registro inserido com seesso!</br>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($mysql);
    }
}