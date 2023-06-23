<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .estrutura {
            margin: 0 auto;
            width: 500px;

        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Login</h2>
    <form action="validarLogin.php" class="mb-3 estrutura" method="POST">
        <div>
            <label for="#" class="form-label">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div>
            <label for="" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha">
        </div>


        <div>
            <input type="submit" placeholder=Enviar class="btn btn-primary p-6 mt-2">
    </form>

    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastrar Usuario
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="inserirLogin.php" class="mb-3 estrutura" method="POST">

                        <div>
                            <label for="#" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div>
                            <label for="" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>

                        <div>
                            <input type="submit" placeholder=Enviar class="btn btn-primary p-6 mt-2">
                            <button type="button" class="btn btn-primary p-6 mt-2" data-bs-dismiss="modal">Voltar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>