<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['admin']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $adm = $_POST['admin'];
        $senha = $_POST['senha'];

        //print_r('Artista: ' . $artista);
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM administrador WHERE adm = '$adm' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['admin']);
            unset($_SESSION['senha']);
            header('Location: LoginAdm.php');
        }
        else
        {
            $_SESSION['admin'] = $adm;
            $_SESSION['senha'] = $senha;
            header('Location: sistemaAdm.php');
        }
    }
    else
    {
        header('Location: LoginAdm.php');
    }
?>