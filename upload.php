<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>upload de arquvos</h2>

    <?php
    
    //elimina o limite de tempo de execução
    set_time_limit (0);

    //inclui o arquivo com as configurações 
    include 'config_upload.inc';

    $nome_arquivo = $_FILES ['arquivo']['name'];
    $tamanho_arquivo = $_FILES ['arquivo']['size'];
    $arquivo_temporario = $_FILES ['arquivo'] ['tmp_name'];

    if (!empty ($nome_arquivo)){
        if ($sobrescrever == "nao" && file_exists("$caminho_absoluto/$nome_arquivo"))
        
        die("Arquivo já existe.");

        if (($limitar_tamanho == "sim") && ($tamanho_arquivo > $tamanho_bytes))
           
            die("Arquivo deve ter no maximo $tamanho_bytes bytes. ");

            $ext = strchr($nome_arquivo, '.');
            if($limitar_ext ==  "sim" && !in_array($ext, $extensoes_validas))
            die("Extensoes  de arquivos para upload");

            if(move_uploaded_file($arquivo_temporario, "$caminho_absoluto/$nome_arquivo")){
                echo "<p>upload de arquivos<b>". $nome_arquivo."</b> foi concuido com sucesso </p>";

                echo "<p> <a href='upload.html'>Novo Upload</a>";
            }else{
                echo "<p>O arquivo não pode ser copiado paara o servidor</p>";
            }


    }
    else{
        die("Selecione o arquivo a ser enviado");
    }
    
    ?>

</body>

</html>