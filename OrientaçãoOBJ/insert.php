<?php
// incluir arquivo de conexão de banco de dados
require_once'function.php';
$insertdata=new DB_con(); 
if(isset($_POST['insert']))
{

// Valores postados
$nome=$_POST['nome'];
$mae=$_POST['mae'];
$pai=$_POST['pai']; 
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$dataEntrada=$_POST['dataEntrada'];
//Chamada de função
$sql=$insertdata->insert($nome,$mae,$pai,$email,$telefone,$endereco,$dataEntrada);

if($sql)
{
// Mensagem para inserção bem-sucedida
echo "<script>alert('Registro inserido com sucesso');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
else 
{
// Mensagem para inserção sem sucesso
echo "<script>alert('Algo deu errado. Por favor, tente novamente');</script>";
echo "<script>window.location.href='index.php'</script>"; 
}
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
<h3>Inserindo registro | Crud Orientado a Objetos php</h3>
<hr />
</div>
</div>


<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Nome</b>
<input type="text" name="nome" class="form-control" required>
</div>
<div class="col-md-4"><b>Mãe</b>
<input type="text" name="mae" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Pai</b>
<input type="text" name="pai" class="form-control" required>
</div>
<div class="col-md-4"><b>Email</b>
<input type="email" name="email" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Telefone</b>
<input type="text" name="telefone" class="form-control" required>
</div>
<div class="col-md-4"><b>Data Entrada</b>
<input type="date" name="dataEntrada" class="form-control" maxlength="10" required>
</div>
</div>   



<div class="row">
<div class="col-md-8"><b>Endereço</b>
<textarea class="form-control" name="endereco" required></textarea>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
     
         

</form>
              
</div>
</div>
</body>
</html>