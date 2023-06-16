<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            cursor: url(http://www.rw-designer.com/cursor-extern.php?id=130078), default;
        }

        body {
            background-color: #74EBD5;
            background-image: linear-gradient(315deg, #74EBD5 30%, #9FACE6 73%), no-repeat;
            Font-family: Arial;
        }

        header {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .header {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            box-sizing: border-box;
            align-items: center;
            padding: 0 30px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .header a {
            text-decoration: none;
        }

        .header-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            list-style: none;
            text-decoration: none;
        }

        .header-menu a {
            padding: 16px 0px;
            display: inline-block;
            position: relative;
            text-decoration: none;

        }

        .header-menu a:after {
            content: "";
            display: block;
            height: 2px;
            width: 0%;
            margin-top: 4px;
            position: absolute;
        }

        .header-menu a:hover::after {
            width: 100%;
            transition: 0.3s;
        }

        .header-menu a:hover {
            background-color: #fff;

        }

        h1 {
            text-align: center;
        }

        h2 {
            margin-top: 0px;
        }

        .comprar {
            background: #a8f;
            color: #103;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 10px;

        }

        .item {
            margin: 100px 0 0 0;
            background: #f7f7f7;
            border: 1px solid #e7e7e7;
            padding: 20px;
            border-radius: 15px;
            display: grid;
            box-shadow: 20px 20px 10px linear-gradient(315deg, #74EBD5 30%, #9FACE6 73%)
        }

        .grid {
            display: grid;
            grid-template-columns: 250px 250px 250px 250px;
            gap: 20px;
            justify-content: center;
        }

        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                7px 7px 20px 0px rgba(0, 0, 0, .1),
                4px 4px 5px 0px rgba(0, 0, 0, .1);
            outline: none;
        }

        .btn {
            background: linear-gradient(0deg, rgba(255, 151, 0, 1) 0%, rgba(251, 75, 2, 1) 100%);
            line-height: 42px;
            padding: 0;
            border: none;
        }

        .btn span {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .btn:before,
        .btn:after {
            position: absolute;
            content: "";
            right: 0;
            bottom: 0;
            background: rgba(251, 75, 2, 1);
            box-shadow: -7px -7px 20px 0px rgba(255, 255, 255, .9),
                -4px -4px 5px 0px rgba(255, 255, 255, .9),
                7px 7px 20px 0px rgba(0, 0, 0, .2),
                4px 4px 5px 0px rgba(0, 0, 0, .3);
            transition: all 0.3s ease;
        }

        .btn:before {
            height: 0%;
            width: 2px;
        }

        .btn:after {
            width: 0%;
            height: 2px;
        }

        .btn:hover {
            color: rgba(251, 75, 2, 1);
            background: transparent;
        }

        .btn:hover:before {
            height: 100%;
        }

        .btn:hover:after {
            width: 100%;
        }

        .btn span:before,
        .btn span:after {
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            background: rgba(251, 75, 2, 1);
            box-shadow: -7px -7px 20px 0px rgba(255, 255, 255, .9),
                -4px -4px 5px 0px rgba(255, 255, 255, .9),
                7px 7px 20px 0px rgba(0, 0, 0, .2),
                4px 4px 5px 0px rgba(0, 0, 0, .3);
            transition: all 0.3s ease;
        }

        .btn span:before {
            width: 2px;
            height: 0%;
        }

        .btn span:after {
            height: 2px;
            width: 0%;
        }

        .btn span:hover:before {
            height: 100%;
        }

        .btn span:hover:after {
            width: 100%;
        }

        .teste {
            background: -webkit-linear-gradient(180deg, #FFFFFF 0%, #6284FF 50%, #FF0000 100%);
            -webkit-background-clip:text ;
            -webkit-text-fill-color: transparent;
            width: 200px;
            font-size: 60px;
        }

        
    </style>
</head>

<body>
    <header class="header-bg">
        <div class="header">
            <a href="#">LOGO</a>
            <nav>
                <ul class="header-menu">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">LIVROS</a></li>
                    <li><a href="#">CONTATO</a></li>
                    <li><a href="#">LOGIN</a></li>
                </ul>

            </nav>
        </div>
    </header>

    <main class="grid">

        <div class="item">
            <h2>Livro</h2>
            <img src="" alt="">
            <p class="preco">R$ 30</p>
            <p>Livro Top</p>
            <button class="custom-btn btn"><span>Comprar</span></button>
        </div>

        <div class="item">
            <h2>Livro</h2>
            <p class="preco">R$ 30</p>
            <p>Livro Top</p>
            <a class="comprar" href="#">Comprar</a>
        </div>

        <div class="item">
            <h2>Livro</h2>
            <p class="preco">R$ 30</p>
            <p>Livro Top</p>
            <a class="comprar" href="#">Comprar</a>
        </div>

        <div class="item">
            <h2>Livro</h2>
            <p class="preco">R$ 30</p>
            <p>Livro Top</p>
            <a class="comprar" href="#">Comprar</a>
        </div>
    </main>

    <h1 class="teste">Teste</h1>


</body>

</html>