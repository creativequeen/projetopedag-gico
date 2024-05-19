<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importe o pacote de ícones do Ionic Framework -->
    <script src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-image: url('img/fundo2.jpg'); background-size: cover; background-position: center;">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        /* Adicionando a fonte Peach Cake */
        @font-face {
            font-family: peachcake;
            src: url('/fonts/Peach\ Cake.otf') format('truetype');
        }

        /* Reset de estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos da barra de navegação */
        .logo img{
            position: absolute; /* Define a posição absoluta para o logo */
            top: 20px; /* Ajusta a distância do topo */
            left: 85%; /* Coloca o logo no meio horizontalmente */
            z-index: 2; /* Garante que o logo esteja acima do banner */
            width: 10%;
        }
        .navigation {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 70px;
            background: #424242;
            box-shadow: 10px 0 0 #099c22;
            border-left: 10px solid #424242;
            overflow-x: hidden;
            transition: width 0.5s;
        }

        .navigation:hover {
            width: 180px;
        }

        .navigation ul {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding-left: 5px;
            padding-top: 40px;
        }

        .navigation ul li {
            position: relative;
            list-style: none;
            width: 100%;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .navigation ul li a {
            display: flex;
            width: 100%;
            text-decoration: none;
            color: #fff;
            align-items: center;
        }

        .navigation ul li a .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 60px;
            height: 60px;
        }

        .navigation ul li a .icon ion-icon {
            font-size: 1.3rem;
        }

        .navigation ul li a .title {
            padding-left: 10px;
            white-space: nowrap;
        }

        .navigation ul li.active {
            background: #099c22;
        }

        .navigation ul li.active a::after {
            content: '';
            position: absolute;
            bottom: -30px;
            right: 0;
            width: 30px;
            height: 30px;
            background: #424242;
            border-radius: 50%;
            box-shadow: 15px -15px 0 #099c22;
        }

        /* Estilos do banner */
        .container {
            display: none; /* Oculta o contêiner */
        }

        .hero-text h1 {
            font-family: 'peachcake', sans-serif; /* Usando a fonte Peach Cake */
            font-size: 3.1rem; /* Exemplo de tamanho fixo, você pode ajustar conforme necessário */
            color: #099c22;
            margin-top: -10vh; /* Usando uma unidade relativa para o espaçamento */
            text-align: center;
        }

        .hero-text p {
            font-size: 1.2rem; /* Exemplo de tamanho fixo, você pode ajustar conforme necessário */
            margin-top: 2vh; /* Usando uma unidade relativa para o espaçamento */
            text-align: center;
            color: white;
        }

        /* Estilos responsivos */
        @media (max-width: 2000px) {
            .hero-text h1 {
                font-size: 2.9rem;
                margin-left: 8%;    
            }
            .hero-text p {
                font-size: 1.5rem;
                margin-left: 10%;
            }
        }

        @media (max-width: 885px) {
            .hero-text h1 {
                font-size: 1.9rem;
            }
            .hero-text p {
                font-size: 1.0rem;
                margin-left: 10%;
            }
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 1.3rem;
                margin-top: -10%;
                margin-left: 12%;
            }
            .hero-text p {
                font-size: 1.0rem;
                margin-left: 15%;
            }
        }

        @media (max-width: 490px) {
            .hero-text h1 {
                font-size: 1rem;
                margin-left: 15%;
                margin-top: -10%;
            }
            .hero-text p {
                font-size: 0.8rem;
                margin-left: 15%;
            }
        }

        .POST {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputsubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputsubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>

    <a href="login.php">Voltar</a>
    <div class="POST">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputsubmit" type="submit" name="submit" value="Enviar">
            <br><br>

            <div class="btn-group">

                <a href="" class="btn btn-primary">Esqueci a senha</a>
                <a href="formulario2.php." class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Cadastre-se</a>
            </div>
        </form>
      
    </div>

    <div class="logo">
        <img src="img/logocci.png" alt="Logo CCI">
    </div>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="home.php">
                    <!-- Use o nome do ícone entre as tags ion-icon -->
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <span class="litle">Início</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <!-- Use o nome do ícone entre as tags ion-icon -->
                    <span class="icon"><ion-icon name="book"></ion-icon></span>
                    <span class="litle">Alfabetização</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <!-- Use o nome do ícone entre as tags ion-icon -->
                    <span class="icon"><ion-icon name="text"></ion-icon></span>
                    <span class="litle">Letramento</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <!-- Use o nome do ícone entre as tags ion-icon -->
                    <span class="icon"><ion-icon name="color-fill"></ion-icon></span>
                    <span class="litle">Ética e cidadania</span>
                </a>
            </li>
            <li class="list">
                <a href="upload.php">
                    <!-- Use o nome do ícone entre as tags ion-icon -->
                    <span class="icon"><ion-icon name="log-in"></ion-icon></span>
                    <span class="litle">POSTAR ATIVIDADE</span>
                </a>
            </li>
        </ul>
    </div>


    <script>
        const list = document.querySelectorAll('.list');
        function activeLink() {
            list.forEach((item) => item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item) => item.addEventListener('click', activeLink));
    </script>
    
</body>
</html>
