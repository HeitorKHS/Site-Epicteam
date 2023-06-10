<?php
    require "cliente.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Epiteam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section class="cabecalho-conteudo">
            <section class="logo">
                <a href="../Home/index.php"><img src="../img/logo.png" alt="Epiteam logo"></a>
            </section>
            <nav class="menu1">
                <ul class="ul">
                    <li><a href="../Cadastro/cadastro.php">CADASTRAR-SE</a></li>
                    <li><a href="../Login/index.php">ENTRAR</a></li>
                    <li class="baixar"><a href="#">BAIXAR EPICTEAM</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <section class="conteudo">

        <nav class="menu-principal">
            <div id="fade" class="hide"></div>
            <div id="modal" class="hide">
            <div class="modal-header">
                <h2>Cadastrar</h2>
                <button id="close-modal">Fechar</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../Home/cadastroJogo.php">
                <label for="fname">Nome do jogo:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="fvalue">Preço:</label><br>
                <input type="text" id="fvalue" name="fvalue"><br>
                <label for="fdesc">Descrição:</label><br>
                <input type="text" id="fdesc" name="fdesc"><br>
                <label for="ftype">Tipo:</label><br>
                <input type="text" id="ftype" name="ftype"><br>
                <input type="file" name="fimage">
                <input class=inputc type="submit" value="Cadastrar">
                </form>
            </div>
            </div>
            <ul class="ul">
                <li><a id="open-modal">Inserir Jogos</a></li>
                <li><a href="../ExibirJogos/index.php"#>Exibir Jogos</a></li>
                <li><div class="divBusca">
                    <input type="text" id="txtBusca" placeholder="Pesquisar na loja"/>
                </div></li>
                <li><a href="../ExibirVendedor/index.php">Exibir Vendedor</a></li>
                <li><a href="../ExibirCliente/index.php">Exibir Cliente</a></li>
            </ul>
        </nav>
            <script type="text/javascript" src="script.js"></script>

    <section class="lista-clientes">
        <section class="titulo-lista-clientes">
            <h1>Lista de Clientes</h1>
        </section>
        <section class="clientes">
            <?php
                    $listaClientes = retornarClientes();
                    while($clientes = mysqli_fetch_assoc($listaClientes))
                    {
                        echo "<section class =\"clientes-conteudo\">";

                        echo "<section class =\"nome-tipo\">";
                        echo "<h1>Nickname: ".$clientes["nickname"]."</h1>";
                        echo "<p>Tipo: ".$clientes["tipo"]."<//p>";
                        echo "<section class =\"email\">";
                        echo "<p>E-mail: ".$clientes["email"]."</p>";
                        echo "</section>";
                        echo "</section>";
                        echo "</section>";
                    }
            ?>
        </section>
    </section>


    <footer>
        <section class="rodape">
            <section class="rodape-conteudo">
                <section class="rede-social">
                    <a href="#"><img src="../img/rede-social/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../img/rede-social/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="../img/rede-social/youtube.png" alt="youtube"></a>
                </section>
                <section class="rodape-link">
                    <a href="#">Política de privacidade</a>
                    <a href="#">Termos legais</a>
                    <a href="#">Apoie um criador</a>
                    <a href="#">Reembolsos</a>
                    <a href="#">Cookies</a>
                </section>
                <section class="rodape-direitos">
                    <p>© 2023 Epicteam Corporation. Todos os direitos reservados. 
                        Todas as marcas comerciais são propriedade dos respetivos proprietários no Brasil e outros países.
                        IVA incluído em todos os preços onde aplicável. </p>
                </section>
            </section>
        </section>
    </footer>
</body>
</html>