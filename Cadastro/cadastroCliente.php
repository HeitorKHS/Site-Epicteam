<?php
    session_start();
    require "bancodedados.php";

    if (!empty($_POST['femail']) && !empty($_POST['fnickname']) && !empty($_POST['fsenha']) && !empty($_POST['tipo'])){
        $email = $_POST['femail'];
        $nickname = $_POST['fnickname'];
        $senha = $_POST['fsenha'];
        $tipo = $_POST['tipo'];


        inserirCliente($email, $nickname, $senha, $tipo);
        header('Location:../Login/index.php');
        die(); 
    }
?>