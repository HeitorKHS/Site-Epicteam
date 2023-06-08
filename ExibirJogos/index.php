<?php
    require "jogos.php";
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
                <img src="../img/logo.png" alt="Epiteam logo">
            </section>
            <nav class="menu1">
                <ul class="ul">
                    <li><a href=#>IDIOMA</a></li>
                    <li><a href="#">ENTRAR</a></li>
                    <li class="baixar"><a href="#">BAIXAR EPICTEAM</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <section class="conteudo">

        <nav class="menu-principal">
            <ul class="ul">
                <li><a href="#">Inserir Jogos</a></li>
                <li><a href=#>Exibir Jogos</a></li>
                <li><div class="divBusca">
                    <input type="text" id="txtBusca" placeholder="Pesquisar na loja"/>
                </div></li>
                <li><a href="#">Exibir Vendedor</a></li>
                <li><a href="#">Exibir Cliente</a></li>
            </ul>
        </nav>
            <script type="text/javascript" src="script.js"></script>

    <section class="lista-jogos">
        <section class="titulo-lista-jogos">
            <h1>Lista de Jogos</h1>
        </section>
        <section class="jogos">
            <?php
                    $listaJogos = retornarJogos();
                    while($jogados = mysqli_fetch_assoc($listaJogos))
                    {
                        echo "<section class =\"jogos-conteudo\">";

                        echo "<section class =\"img-jogos\">";
                        echo "<img src=\".$jogados[Imagem].\"/>";
                        echo "</section>";

                        echo "<section class =\"nome-tipo\">";
                        echo "<h1>".$jogados["Nome"]."</h1>";
                        echo "<p>".$jogados["Tipo"]."<//p>";
                        echo "<section class =\"baixado-jogado\">";
                        echo "<p>Baixados: ".$jogados["Baixado"]."<//p>";
                        echo "<p>Jogados: ".$jogados["Visto"]."<//p>";
                        echo "</section>";
                        echo "</section>";

                        echo "<section class =\"preco\">";
                        echo "<h1> R$".$jogados["Preco"].",00</h1>";
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