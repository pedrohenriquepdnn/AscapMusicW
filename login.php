<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        div{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px;
            border-radius: 15px;
        }
        input{
            padding: 15px;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        .inputSubmit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
            <input type="text" name="artista" placeholder="Artista">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>