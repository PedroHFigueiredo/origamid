<?php
include_once("../conexao/conexxao.php");
if($_POST){
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $isbn = $_POST['isbn'];
    $ano = $_POST['ano'];
    $codigoEditora = $_POST['codigoEditora'];
    $estoque = $_POST['estoque'];
    $sql = "INSERT INTO livro (editora_cod_editora,estoque_cod_editora,nome_livro,auto_livro,preco_livro,categoria,isbn,ano) VALUES ($codigoEditora,$estoque,'$nome','$autor','$preco','$categoria','$isbn','$ano')";
    if($mysql->query($sql)){
        header("Location: cadastroLivros.php");

    }else{
        echo "Error:" . $sql . ":-" . mysqli_error($mysql);
    }
}



?>