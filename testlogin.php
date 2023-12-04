<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['artista']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $artista = $_POST['artista'];
        $senha = $_POST['senha'];

        //print_r('Artista: ' . $artista);
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE artista = '$artista' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['artista']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['artista'] = $artista;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>