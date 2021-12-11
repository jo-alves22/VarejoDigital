<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/vd-style.css">
    <script src="varejo.js"></script>
    
    <title>Varejo Digital</title>
</head>

<body onload="texto();">
    <header>
        <a href="#" class="logo">Varejo Digital<span>.</span></a>

        <div class="menuToggle" onclick="toggleMenu();"></div>

        <ul class="navigation">
            <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
            <li><a href="#menu" onclick="toggleMenu();">Produtos</a></li>
            <li><a href="paginas/cadastro_usuario.php" target="_blank">Cadastrar</a></li>
            <li><a href="paginas/login.php" target="_blank">Login</a></li>
        </ul>
    </header>

    <section class="banner" id="banner">

        <div class="content">
            <h2 id="log"></h2>

            <a href="#" class="btn">Aproveite Nossos Produtos</a>
            
        </div>
    </section>


    <!-- Produtos -->
    <section class="menu" id="menu">
        <div class="title">
            <h2 class="titleText">Nossos <span>Produtos</span></h2>
            <p>
                Veja nosso produtos de qualidade em oferta! 
            </p>
        </div>

        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="imagens/mandioca.jpg" alt="salada">
                </div>

                <div class="text">
                    <h3>Mandioca</h3>
                    <h3>$12,50 Kg</h3>
                </div>

                <div class="comprar"><h3>Comprar</h3></div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="imagens/broculues.jpg" alt="salada">
                </div>

                <div class="text">
                    <h3>Brocules</h3>
                    <h3>$5,70 Kg</h3>
                </div>
                <div class="comprar"><h3>Comprar</h3></div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="imagens/cenoura.jpg" alt="salada">
                </div>

                <div class="text">
                    <h3>Cenoura</h3>
                    <h3>$4,60 Kg</h3>
                </div>
                <div class="comprar"><h3>Comprar</h3></div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="imagens/mel.png" alt="salada">
                </div>

                <div class="text">
                    <h3>Mel</h3>
                    <h3>$15,90 L</h3>
                </div>
                <div class="comprar"><h3>Comprar</h3></div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="imagens/parmesão.png" alt="salada">
                </div>

                <div class="text">
                    <h3>Queijo Parmesão</h3>
                    <h3>$40,30 Kg</h3>
                </div>
                <div class="comprar"><h3>Comprar</h3></div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="imagens/tomate.png" alt="salada">
                </div>

                <div class="text">
                    <h3>Tomate</h3>
                    <h3>$9,70 Kg</h3>
                </div>
                <div class="comprar"><h3>Comprar</h3></div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <div class="copyrightText">
        <p>Copyright 2021 - Estudos javascript - Fatec &copy;</p> 
    </div>
</body>
</html>