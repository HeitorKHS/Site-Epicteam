<?php
    session_start();
    require "jogos.php";

    $listaJogos = retornarJogos();
    while($jogos = mysqli_fetch_assoc($listaJogos)){
        $Id_Jogo = $jogos["Id_Jogo"];
    }

    if (!empty($_POST['fname']) && !empty($_POST['fvalue']) && !empty($_POST['fdesc']) && !empty($_POST['ftype']) && !empty($_POST['fimage'])){
        $Nome = $_POST['fname'];
        $Preco = $_POST['fvalue'];
        $Descricao = $_POST['fdesc'];
        $Tipo = $_POST['ftype'];
        $Image = $_POST['fimage'];
        $Id_Jogo += 1;
        inserirJogo($Nome, $Preco, $Descricao, $Tipo, $Image, $Id_Jogo);
        header('Location:../Home/index.php');
        die(); 
    }
?>