<?php

    if(isset($_POST['submit']))
    {
            //print_r('Artista: ' . $_POST['artista']);
            //print_r('<br>');
            //print_r('Senha: ' . $_POST['senha']);
            //print_r('<br>');
            //print_r('Musica: ' . $_POST['musica']);
            //print_r('<br>');
            //print_r('Melodia: ' . $_POST['melodia']);
            //print_r('<br>');
            //print_r('Genero: ' . $_POST['genero']);
            //print_r('<br>');
            //print_r('Compositores: ' . $_POST['compositores']);
            //print_r('<br>');
            //print_r('Produtores: ' . $_POST['produtores']);
            //print_r('<br>');
            //print_r('Licença: ' . $_POST['licenca']);
            //print_r('<br>');
            //print_r('Gravadora: ' . $_POST['music']);
            //print_r('<br>');

            include_once('config.php');

            $artista = $_POST['artista'];
            $senha = $_POST['senha'];
            $musica = $_POST['musica'];
            $melodia = $_POST['melodia'];
            $genero = $_POST['genero'];
            $compositores = $_POST['compositores'];
            $produtores = $_POST['produtores'];
            $licenca = $_POST['licenca'];
            $music = $_POST['music'];

            $result = mysqli_query($conexao, "INSERT INTO usuarios (artista,senha,musica,melodia,genero,compositores,produtores,licenca,music) 
            VALUES ('$artista','$senha','$musica','$melodia','$genero','$compositores','$produtores','$licenca','$music')");

            header('Location: home.php');
    }

?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascap Music Wars</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 15px;
            width: 15%;
        }
        fieldset{
            border: 3px solid dodgerblue;
            border-radius: 10px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
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
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }

        @media screen and (max-width: 768px){
            .box{
                width: 70%;
                flex-direction: column;
                zoom: 80%;
            }
        }
        @media screen and (max-width: 768px){
            .inputUser{
                background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 95%;
            letter-spacing: 1px;
            }
        }

    </style>
</head>
<body>
    <div class="box">
        <form action="AscapMWR.php" method="POST">
            <fieldset>
                <legend><b>Cadastro ASCAP</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="artista" id="artista" class="inputUser" required>
                    <label for="artista" class="labelInput">Artista</label>
                <br><br>
                </div>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                <br><br>
                </div>
                <div class="inputBox">
                    <input type="text" name="musica" id="musica" class="inputUser" required>
                    <label for="musica" class="labelInput">Música</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="melodia" id="melodia" class="inputUser" required>
                    <label for="melodia" class="labelInput">Música Original</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" class="inputUser" required>
                    <label for="genero" class="labelInput">Gênero</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="compositores" id="Compositores" class="inputUser" required>
                    <label for="Compositores" class="labelInput">Compositores</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="produtores" id="produtores" class="inputUser" required>
                    <label for="produtores" class="labelInput">Produtores</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="licenca" id="licenca" class="inputUser" required>
                    <label for="licenca" class="labelInput">Licença</label>
                </div>
                <p><b>Gravadora:</b></p>
                <input type="radio" id="independente" name="music" value="independente" required>
                <label for="independente">Independente</label>
                <br>
                <input type="radio" id="Empire Records" name="music" value="Empire Records" required>
                <label for="Empire Records">Empire Records</label>
                <br>
                <input type="radio" id="Global Studios" name="music" value="Global Studios" required>
                <label for="Global Studios">Global Studios</label>
                <br>
                <input type="radio" id="Universal Music Group" name="music" value="Universal Music Group" required>
                <label for="Universal Music Group">Universal Music Group</label>
                <p></p>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>