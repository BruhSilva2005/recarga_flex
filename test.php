<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recarga Flex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header id="cabecalho" class="container">
    <div id="logotipo">
        <h1><img src="assets/img/logomarca.png" alt="recarga flex" height="70"></h1>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Quem Somos</a></li>
        </ul>
    </nav>
    <div id="botaoTopo">
        <a href="#" class="btn-secundario">Login</a>
        <a href="#" class="btn-secundario">Cadastrar</a>
    </div>
</header>
<html >
<head>
    <meta charset="UTF-8">
    <style>
        #caixa{
            width: 60vw;
            height:12rem ;
            background: grey;
            margin: 4rem auto 0 auto;
            border:solid 4px;
            display: flex;
            padding: 1rem;  
            overflow-x:auto ;            
        }
        #caixa div{
            min-width: 12rem;
            max-height: 12rem;
            background: red;
            border: solid 2px;
            margin-left: 2rem;
        }
        #caixa div p{
            margin-top: 40%;
            margin-left: 40%;
            font: bold 2rem sans-serif;
            color: white;
        }
        #cabecalho {
    background-color: #f58634;
}
.carousel-container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .carousel-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            flex: 0 0 100%;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-prev,
        .carousel-next {
            cursor: pointer;
            padding: 10px;
            background-color: #0074D9; /* Cor de fundo azul */
            color: #FFF; /* Cor do texto branco */
        }

        .carousel-prev {
            left: 0;
        }

        .carousel-next {
            right: 0;
        }
    </style>
</head>
<body>
<div class="carousel-container">
        <div class="carousel-wrapper">
            <div class="carousel-item">
                <img src="https://img.freepik.com/fotos-gratis/um-design-colorido-com-um-design-em-espiral_188544-9588.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699228800&semt=sph" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkMNHN0BSGrUzSkczPfcdYK7kDG0Lp-tnybdo7fwMGsXKJvqGUGJqYaCGOSdhamEFCqQ4&usqp=CAU" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="URL_DA_IMAGEM_3" alt="Imagem 3">
            </div>
        </div>
    </div>
</body>
</html>
<div id="banner">
    <div class ="container">
        </div>
    </div>
</div>
    <main class="container">
        <h2>Serviços</h2>
    </main>


</body>
</html>