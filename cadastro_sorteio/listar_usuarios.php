<!DOCTYPE html>
<html>
<head>
	<title>Listagem de usuários</title>
	<!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <style type="text/css" class="init">
  
  </style>
  <script type="text/javascript" src="/media/js/site.js?_=6093ce51057f043716aadf9628fff069"></script>

  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<style type="text/css">
  #tamanhoContainer{
    width: 500px;
  }

  #botao{
    background-color: #FF1168;   /*cor de fundo*/
    color: #ffffff; /*cor da letra*/
    font-weight: bold;
  }

</style>


</head>
<body>
<?php  
include 'menu.php';
?>
<div class="container"  id="tamanhoContainer" style="margin-top: 40px">
<h3>Lista de usuários</h3>
<br>
<a class="btn btn-primary" style="color: #fff" href="inserir_categoria.php" role="button"><i class="fas fa-plus"></i>&nbsp;Incluir</a>
<br>
<table id="example" class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <th scope="col">ID. usuário</th>
      <th scope="col">Nome</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    <tbody>
    	<?php
    		 include 'conexao.php';
    		 $sql = "SELECT * FROM `usuarios`";
         $busca = mysqli_query($conexao,$sql);

         while ($array = mysqli_fetch_array($busca)) {
            $id_usuario = $array['id_usuario'];
            $nome_usuario = $array['nome_usuario'];
 
 
    		 
    	?>
      <tr>
      <td><?php echo $id_usuario ?></td>
      <td><?php echo $nome_usuario ?></td>
  
      <td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>

       
      </tr>



      <?php } ?>
      </tbody>

</table>


</div>



<!-- JavaScript Bundle with Popper -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


</body>
</html>