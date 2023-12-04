<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
            $id = $_POST['id'];
            $artista = $_POST['artista'];
            $senha = $_POST['senha'];
            $musica = $_POST['musica'];
            $melodia = $_POST['melodia'];
            $genero = $_POST['genero'];
            $compositores = $_POST['compositores'];
            $produtores = $_POST['produtores'];
            $licenca = $_POST['licenca'];
            $music = $_POST['music'];

            $sqlUpdate = "UPDATE usuarios SET artista='$artista',senha='$senha',musica='$musica',melodia='$melodia',genero='$genero',compositores='$compositores',produtores='$produtores',licenca='$licenca',music='$music'
            WHERE id='$id'";

            $result = $conexao->query($sqlUpdate);
    }
    header('Location: sistemaAdm.php');

?>