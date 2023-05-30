<?php include_once("conexao.php"); @$id= $_GET["id"];?>
<?php include 'protegido.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
    <title>Editar Usuarios</title>
</head>
<body>
<?php 
        $query ="SELECT nome, email FROM usuarios WHERE id_usuario = $id";
       // $usuario = mysqli_query($mysql, $query);
       // $dados_usuario = mysqli_fetch_all($usuario, MYSQLI_ASSOC);

        
        $con = $mysql->query( $query) or die($mysql->error);
     ?>
     <?php  while ($dado = $con->fetch_array()) { ?>



    <form action="atualizar_usuarios.php" method="POST" class="table ">
        <input type="hidden" name="id_usuario" value="<?=$id?>" scope="col">
        <input type="text" name="nome" value="<?=$dado["nome"]?>" scope="col">
        <input type="text" name="email" value="<?=$dado["email"]?>" scope="col"> 
        <input type="submit" value="Atualizar" class="btn btn-primary">
    </form>
<?php
     }  
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script> 
</body>


</html>
