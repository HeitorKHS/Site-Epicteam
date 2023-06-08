<?php

function conectarBD()
{
    $conexao = mysqli_connect("localhost","root","","jogos");
    return $conexao;
}

function retornaJogo($Id)
{
    $conexao = conectarBD();
    $consultar = "SELECT * FROM jogos where Id_Jogo = $Id";
    $jogo = mysqli_query($conexao, $consultar);
    return $jogo->fetch_assoc();
}

?>