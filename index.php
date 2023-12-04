<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascap Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
        @media screen and (max-width: 768px){
            .box{
                width: 60%;
                flex-direction: column;
                zoom: 80%;
            }
        }
    </style>
</head>
<body>
    <h1>Ascap</h1>
    <h2>Music Wars Rockstar</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="AscapMWR.php">Registre-se</a>
        <a href="loginAdm.php">Admin</a>
    </div>
</body>
</html>