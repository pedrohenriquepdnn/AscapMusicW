<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login Admin</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgba(175,29,29,1), rgb(130,1,1,1));
        }
        div{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.4);
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
            background-image: linear-gradient(to right, rgba(175,29,29,1), rgb(130,1,1,1));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        .inputSubmit:hover{
            background-image: linear-gradient(90deg, rgba(238,0,0,1) 0%, rgba(172,0,0,1) 35%, rgba(117,0,0,1) 100%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Admin</h1>
        <form action="testloginAdm.php" method="POST">
            <input type="text" name="admin" placeholder="admin">
            <br><br>
            <input type="password" name="senha" placeholder="senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>