<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY idusuarios DESC";
    }
    $result = $conexao->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importe o pacote de ícones do Ionic Framework -->
    <script src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex align-items-center">

        <?php
        echo "<h5>Bem vindo <u>$logado</u></h5>";
    ?>

       
            <a href="sair.php" class="btn btn-danger ">Sair</a>
            
        </div>
 
    </nav>
    <br>
    

    <br>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

/* Adicionando a fonte Peach Cake */
@font-face {
    font-family: peachcake;
    src: url('/fonts/Peach\ Cake.otf') format('truetype');
}

.d-flex{
    text-align:center;
    left: -50px;
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
    top: 5px; /* Ajusta a distância do topo */
    left: 45%; /* Coloca o logo no meio horizontalmente */
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
    height: auto; /* Ajusta a altura automaticamente com base no conteúdo */
    padding: 20px;
    display: flex;
    flex-direction: column; /* Altera a direção do layout para coluna */
    justify-content: flex-start; /* Alinha os elementos ao início do contêiner */
    align-items: center;
    gap: 40px;
}

/* Estilos da imagem dentro do contêiner */
.container img {
    width: 100%;
    height: auto; /* Permite que a altura da imagem seja ajustada automaticamente */
    align-self: flex-start; /* Alinha a imagem ao topo do contêiner */
    margin-top: -30px;
    margin-left: 30px;
    margin-right: 40px;
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
    

    }}

@media (max-width: 885px) {
    .hero-text h1 {
        font-size: 1.9rem;
    
        
    }
    .hero-text p {
        font-size: 1.0rem;
        margin-left: 10%;
    

    }
    .container {
        margin-top: 10px;
        flex-direction: column;
    }
    .banner img {
        width: 100%;
        height: auto;
    }
}

@media (max-width: 768px) {
    .container {
        margin-top: 10px;
        flex-direction: column;
    }
    .hero-text h1 {
        font-size: 1.3rem;
        margin-top: -10%;
        margin-left: 12%;
    }
    .hero-text p {
        font-size: 1.0rem;
        margin-left: 15%;

    }
    .container img {
        width: 100%;
        height: auto;
    }

    .navigation {
        height: 100vh;
        width: 60px;
    }
        .navigation:hover {
            width: 160px;
        }
        
        .navigation ul li {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        
        .navigation ul li a .icon {
            min-width: 50px;
            height: 50px;
            z-index: 1;
        }
        
        .navigation ul li a .icon ion-icon {
            font-size: 1.2rem;
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

    .container img {
        width: 100%;
        height: auto;
        margin-left: 30px;
        margin-right: 40px;
    }

    .navigation {
        height: 100vh;  
        width: 40px; /* largura do menu fechado */
    }
        .navigation:hover { /* largura do menu */
            width: 140px;
        }
        
        .navigation ul li {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        
        .navigation ul li a .icon {
            min-width: 30px;
            height: 30px;
            z-index: 1;
        }
        
        .navigation ul li a .icon ion-icon {
            font-size: 1.1rem;
         } }

    </style>
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

    <div class="container">
        <img src="img/Banner.png" alt="">
            <div class="hero-text">
            <p>Programado</p>

<h2>Upload de arquivos</h2>
<div class="card">
    <div class="card-body">
        <form action="envia.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <input type="submit" value="Enviar">
        </form>
    </div>
            </div>
        </div>
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
