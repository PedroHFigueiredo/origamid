<?php 
include_once("../conexao/conexxao.php");

if($_GET["id"]){
    $id_livro = $_GET["id"];

    $query = "DELETE FROM livro WHERE id_livro = $id_livro";
    $excluir = mysqli_query($mysql, $query);

    if($excluir){
        echo"<script>alert('Livro Excluido')</script>";
             echo"<script>window.location.href='cadastroLivros.php';</script>";
    } else {
    echo "Erro ao Excluir.";
} 
}   else{
    echo"LIVRO NÃO ENCONTRADO";
}



?>