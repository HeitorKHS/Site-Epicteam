<?php
    require "bancodedados.php";
    session_start();
    $listaClientes = retornarClientes();
    $nickname = $_POST['fnickname'];
    $senha = $_POST['fsenha'];
    while($cliente = mysqli_fetch_assoc($listaClientes)){
        if ($nickname == $cliente["nickname"] && $senha == $cliente["senha"]){
            header('Location:/Site-Epicteam-main/Home/index.php');
            die();
        }
        else
            continue;
    $_SESSION['Resultado'] = "Nickname ou senha incorreta!!";
    header('Location:../Login/index.php');
    die();
    }
?>