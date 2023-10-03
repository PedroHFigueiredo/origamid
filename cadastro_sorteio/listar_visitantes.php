<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Produtos</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



<script src="https://kit.fontawesome.com/144f0dbd63.js" crossorigin="anonymous"></script>
</head>
<body>
<?php  
include 'menu.php'
?>
<div class="container" style="margin-top: 40px">
<h3>Lista de Visitantes</h3>
<br>
<a class="btn btn-primary" style="color: #fff" href="inserir_visitante.php" role="button"><i class="fas fa-plus"></i>&nbsp;Incluir</a>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sequencia</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ação</th> 
      <th scope="col">Ação</th> 
    </tr>
  </thead>
    
    	<?php
    		 include 'conexao.php';
    		 $sql = "SELECT * FROM `pessoas`";
         $busca = mysqli_query($conexao,$sql);

         while ($array = mysqli_fetch_array($busca)) {
            $id			 = $array['id'];
            $nome		 = $array['nome'];
            $email		 = $array['email'];

 
    		 
    	?>
      <tr>
      <td><?php echo $id ?></td>
      <td><?php echo $nome ?></td>
      <td><?php echo $email ?></td>

      <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_visitante.php?id=<?php echo $id ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>

      <td><a class="btn btn-danger btn-sm" style="color: #fff" href="_excluir_visitante.php?id=<?php echo $id ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>      
      </tr>



      <?php } ?>
    

</table>


</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>