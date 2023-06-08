<?php

function conectarBD()
{
    $conexao = mysqli_connect("localhost","root","","jogos");
    return $conexao;
}

function retornarJogos()
{
    $conexao = conectarBD();
    $consultar = "SELECT * FROM jogos";
    $listaJogos = mysqli_query($conexao, $consultar);
    return $listaJogos;
}

?>