<?php

function conectarBD()
{
    $conexao = mysqli_connect("localhost","root","","jogos");
    return $conexao;
}

function retornarJogados()
{
    $conexao = conectarBD();
    $consultar = "SELECT * FROM jogos ORDER BY Visto DESC LIMIT 3";
    $listaBaixados = mysqli_query($conexao, $consultar);
    return $listaBaixados;
}

function retornarBaixados()
{
    $conexao = conectarBD();
    $consultar = "SELECT * FROM jogos ORDER BY Baixado DESC LIMIT 3";
    $listaBaixados = mysqli_query($conexao, $consultar);
    return $listaBaixados;
}

function retornarBreve()
{
    $conexao = conectarBD();
    $consultar = "SELECT * FROM breve LIMIT 3";
    $listaBaixados = mysqli_query($conexao, $consultar);
    return $listaBaixados;
}

function retornarJogos(){
    $conexao = conectarBD();
    $consulta = "SELECT * FROM jogos";
    $listaJogos = mysqli_query($conexao,$consulta);
    return $listaJogos;
}

function inserirJogo($Nome, $Preco, $Descricao, $Tipo, $Image, $Id_Jogo){
    $conexao = conectarBD();
    $consulta = "INSERT INTO jogos (Nome, Preco, Descricao, Tipo, Imagem, Id_Jogo)
                 VALUES ('$Nome','$Preco','$Descricao','$Tipo','$Image','$Id_Jogo')";
    mysqli_query($conexao,$consulta);
}
?>