<?php
// incluir arquivo de conexão de banco de dados
include_once("function.php");
$updatedata=new DB_con(); 
if(isset($_POST['update']))
{
// Obter o userid
$userid=intval($_GET['id']);
// Post Valores  
$nome=$_POST['nome'];
$mae=$_POST['mae']; 
$pai=$_POST['pai'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];

//Chamada de função
$sql=$updatedata->update($nome,$mae,$pai,$email,$telefone,$endereco,$userid);

//Mensagem após a atualização
 echo "<script>alert('Registro atualizado com sucesso');</script>";
// Código para redirecionamento
 echo "<script>window.location.href='index.php'</script>"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Crud Orientado a Objetos php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-12">
<h3>Crud Orientado a Objetos php</h3>
<hr />
</div>
</div>

<?php 
// Obtenha o ID do usuário
$userid=intval($_GET['id']);
$onerecord=new DB_con(); 
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>              

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Nome</b>
<input type="text" name="nome" value="<?php echo htmlentities($row['Nome']);?>" class="form-control" >
</div>
<div class="col-md-4"><b>Mae</b>
<input type="text" name="Mae" value="<?php echo htmlentities($row['Mae']);?>" class="form-control">
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Pai</b>
<input type="text" name="pai" value="<?php echo htmlentities($row['Pai']);?>" class="form-control">
</div>
<div class="col-md-4"><b>Telefone</b>
<input type="text" name="telefone" value="<?php echo htmlentities($row['Telefone']);?>" class="form-control" maxlength="10">
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Email</b>
<input type="email" name="email" value="<?php echo htmlentities($row['Email']);?>" class="form-control">
</div>
<div class="col-md-4"><b>Endereco</b>
<input type="text" name="endereco" value="<?php echo htmlentities($row['Endereco']);?>" class="form-control" maxlength="10">
</div>
</div>  
<?php } ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div> 
     </form>
            
      
	</div>
</div>

</body>
</htm