<?php

if(isset($_POST['nome'])) {
    // Inclua o arquivo de configuração do banco de dados
    include_once('config.php');

    // Recupere os valores do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = isset($_POST['data_nasc']) ? $_POST['data_nasc'] : null;

    // Execute a consulta SQL para inserir os dados no banco de dados
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, telefone, genero, data_nasc) 
    VALUES ('$nome', '$senha', '$email', '$telefone', '$genero', '$data_nasc')");

    // Verifique se a inserção foi bem-sucedida
    if($result) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
    }
}
?>






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

        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box{
            color: white;
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
        }
        fieldset{
            : 
            border: 3px solid dodgerblue;
            padding: 20px;
            border-radius: 8px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            top: 0%;
            text-align: center;
            background-color: red;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
            margin-bottom: 20px;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            padding: 5px 0;
            box-sizing: border-box;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            width: 100%;
            box-sizing: border-box;
            margin-top: 20px; /* Adiciona espaço acima do campo de data */
    margin-bottom: 20px; /* Adiciona espaço abaixo do campo de data */
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }

        @media (max-width: 600px) {
            .box {
                width: 100%;
            }
        }
    </style>

    
    <div class="box">

    
        <form action="formulario2.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar Usuário</b></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>genero:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                <label for="data_nasc"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br>
                <br>
            
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
              
                <input type="submit" name="submit" id="submit">
            </fieldset>
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
