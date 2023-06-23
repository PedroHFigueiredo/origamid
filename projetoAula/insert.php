<?php

// Incluir arquivo de conexão de Bnaco de dados 

require_once 'functions.php';
$insertdata = new DB_con();

if (isset($_POST['insert'])) {


    // Valores postados

    $nome = $_POST['nome'];
    $mae = $_POST['mae'];
    $pai = $_POST['pai'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dataEntrada = $_POST['dataEntrada'];

    // chamada SQL

    $sql = $insertdata->insert($nome, $mae, $pai, $email, $telefone, $endereco, $dataEntrada);

    if ($sql) {
        // Mensagem para incerção bem sucedida 
        echo "<scrit>alert('Registro ingerido com sucesso')</scrit>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        // Mensagem para inserção sem sucesso

        echo "<scrit>alert('Algo deu errado por favor tente novamente')</scrit>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mb-12">
                <h1>Inserindo registro | Crud Orientado a Objetos PHP</h1>
                <br />
            </div>

        </div>




    </div>

</body>

</html>