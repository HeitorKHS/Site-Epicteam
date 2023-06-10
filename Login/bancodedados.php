<?php
    function conectarBD(){
        $conexao = mysqli_connect("localhost", "root", "", "jogos");
        return($conexao);
    }

    function inserirCliente($email, $nickname, $senha, $tipo){
        $conexao = conectarBD();
        $consulta = "INSERT INTO cliente (email, nickname, senha, tipo)
                     VALUES ('$email','$nickname','$senha', '$tipo')";
        mysqli_query($conexao,$consulta);
    }

    function retornarClientes(){
        $conexao = conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }
?>