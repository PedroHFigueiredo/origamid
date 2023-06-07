<?php 

include_once("conexxao.php");
$id = $_POST['id_livro'];
$nome = $_POST['nome_livro'];
    $autor = $_POST['auto_livro'];
    $preco = $_POST['preco_livro'];
    $categoria = $_POST['categoria'];
    $isbn = $_POST['isbn'];
    $ano = $_POST['ano'];
    $codigoEditora = $_POST['editora_cod_editora'];
    $estoque = $_POST['estoque_cod_editora'];

$query = "UPDATE livro SET nome_livro = '$nome', 
                               auto_livro = '$autor',
                               preco_livro = $preco,
                               categoria = '$categoria',
                               isbn = '$isbn',
                               ano = '$ano',
                               editora_cod_editora = '$codigoEditora',
                               estoque_cod_editora = '$estoque'

         WHERE id_livro = $id";

         $atualizar = mysqli_query($mysql, $query);

         if($atualizar) {
             echo"<script>alert('Dados Atualizados')</script>";
             echo"<script>window.location.href='cadastroLivros.php';</script>";
         } else{
             echo"Erro ao atualizar os dados
             <a href='editar.php?id=$id'>Voltar</a>";
             
         }