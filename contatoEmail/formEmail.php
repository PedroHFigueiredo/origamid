

    <?php
    $email_destino = array(
        "pergunta" => "dudacriativo@gmail.com",
        "reclamacao" => "dudacriativo@gmail.com",
        "suporte" => "dudacriativo@gmail.com",
        "webmaster" => "dudacriativo@gmail.com"
    );

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
    } else {
        echo "Todos os campos devem ser preenchidos";
        exit;
    }

    $msg = "Nome dp Usuario: $nome\n";
    $msg .= "E-mail: $email\n";
    $msg .= "Mensagem: $mensagem";
    mail($email_destino[$assunto], "Mensagem do Usuatio", $msg, "from:dudacriativo@gmail.com.br", "-r dudacriativo@gmail.com");

    echo "Sua mensagem foi enviada com sucesso!";



    ?>
