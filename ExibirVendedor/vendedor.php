<?php

function conectarBD()
{
    $conexao = mysqli_connect("localhost","root","","jogos");
    return $conexao;
}

function retornarClientes()
{
    $conexao = conectarBD();
    $consultar = "SELECT * FROM cliente where tipo = 'vendedor'";
    $listaClientes = mysqli_query($conexao, $consultar);
    return $listaClientes;
}

?>