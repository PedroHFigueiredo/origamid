<?php
// incluir arquivo de conexão de banco de dados
include_once("function.php");


//Deletion
if(isset($_GET['del']))
    {
        // Obtendo ID da linha de exclusão
$rid=$_GET['del'];
$deletedata=new DB_con(); 
$sql=$deletedata->delete($rid);

if($sql)
{
// Mensagem para inserção bem-sucedida
echo "<script>alert('Registro excluído com sucesso');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
    }
    

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Crud Orientado a Objetos php </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Crud Orientado a Objetos php</h3> <hr />
<a href="insert.php"><button class="btn btn-primary">Cadastrar</button></a>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">                 
<thead>
<th>#</th>
<th>Nome</th>
<th>Mãe</th> 
<th>Pai</th> 
<th>Email</th>
<th>Telefone</th>
<th>Endereco</th>
<th>Data Entrada</th>
<th>Editar</th>
<th>Deletar</th>
</thead>
<tbody>
    

 <?php
 $fetchdata=new DB_con(); 
  $sql=$fetchdata->fetchdata();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>               
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row['Nome']);?></td>
    <td><?php echo htmlentities($row['Mae']);?></td>   
    <td><?php echo htmlentities($row['Pai']);?></td>    
    <td><?php echo htmlentities($row['Email']);?></td>
    <td><?php echo htmlentities($row['Telefone']);?></td>
    <td><?php echo htmlentities($row['Endereco']);?></td>
    <td><?php echo htmlentities($row['DataEntrada']);?></td>

    <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>

    <td><a href="index.php?del=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Você realmente deseja excluir');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
    

<?php 
// incremento de número de série
$cnt++;
} ?>
</tbody>      
</table>
</div>
</div>
</div>
</div>
</body>
</html>