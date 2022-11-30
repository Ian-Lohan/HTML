<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <title>Agradecimento</title>
    <style>
        p {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        b {
            font-weight: 600;
            color: #fc00ff;
        }

        button {
            position: relative;
            left: 100px;
            background-color: #fc00ff;
            border: 2px solid #fc00ff;
            color: #fff;
            font-size: 14px;
            width: 50%;
            border-radius: 10px;
            padding: 10px;
            transition: 0.5s;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #d700db;
            border: 2px solid #d700db;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Cadastrado!</h2>
        </div>
        <p>Obrigado pelo cadastro!<br><br>
            <?php
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo 'Seu nome é <b>' . $username . '</b><br>';
            echo 'Seu email é <b>' . $email . '</b><br>';
            echo 'Sua senha é <b>' . $password . '</b><br>';
            ?>
        </p>
        <a href="./index.html"><button>Voltar</button></a>
    </div>

    <script src="https://kit.fontawesome.com/7a4f7baffc.js" crossorigin="anonymous"></script>

    <script src="./scripts.js"></script>
</body>

</html>