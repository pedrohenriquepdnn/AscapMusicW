<?php

    if(!empty($_GET['id']))
    {
            include_once('config.php');

            $id = $_GET['id'];

            $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {
                while($user_data = mysqli_fetch_assoc($result))
                {
                    $artista = $user_data['artista'];
                    $senha = $user_data['senha'];
                    $musica = $user_data['musica'];
                    $melodia = $user_data['melodia'];
                    $genero = $user_data['genero'];
                    $compositores = $user_data['compositores'];
                    $produtores = $user_data['produtores'];
                    $licenca = $user_data['licenca'];
                    $music = $user_data['music'];
                }
            }
            else
            {
                header('Location: sistema.php');
            }
    }
    else
    {
        header('Location: sistema.php');
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
        #update{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
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
    <a href="sistemaAdm.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro ASCAP</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="artista" id="artista" class="inputUser" value="<?php echo$artista ?>" required>
                    <label for="artista" class="labelInput">Artista</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo$senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="musica" id="musica" class="inputUser" value="<?php echo$musica ?>" required>
                    <label for="musica" class="labelInput">Música</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="melodia" id="melodia" class="inputUser" value="<?php echo$melodia ?>" required>
                    <label for="melodia" class="labelInput">Música Original</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="genero" id="genero" class="inputUser" value="<?php echo$genero ?>" required>
                    <label for="genero" class="labelInput">Gênero</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="compositores" id="Compositores" class="inputUser" value="<?php echo$compositores ?>" required>
                    <label for="Compositores" class="labelInput">Compositores</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="produtores" id="produtores" class="inputUser" value="<?php echo$produtores ?>" required>
                    <label for="produtores" class="labelInput">Produtores</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="licenca" id="licenca" class="inputUser" value="<?php echo$licenca ?>" required>
                    <label for="licenca" class="labelInput">Licença</label>
                </div>
                <p><b>Gravadora:</b></p>
                <input type="radio" id="independente" name="music" value="independente" <?php echo ($music == 'independente') ? 'checked' : '' ?> required>
                <label for="independente">Independente</label>
                <br>
                <input type="radio" id="Empire Records" name="music" value="Empire Records" <?php echo ($music == 'Empire Records') ? 'checked' : '' ?> required>
                <label for="Empire Records">Empire Records</label>
                <br>
                <input type="radio" id="Global Studios" name="music" value="Global Studios" <?php echo ($music == 'Global Studios') ? 'checked' : '' ?> required>
                <label for="Global Studios">Global Studios</label>
                <br>
                <input type="radio" id="Universal Music Group" name="music" value="Universal Music Group" <?php $music == 'Universal Music Group' ? 'checked' : '' ?> required>
                <label for="Universal Music Group">Universal Music Group</label>
                <p></p>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>