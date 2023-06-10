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

        <section class="promocao">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <div class="slide first">
                        <div class="slide--imagem">
                            <img id="img-promocao" src="../img/promocao/produto1.jpg"/>

                            <div class="slide--imagem__detalhes">
                                <h2>Grand Theft Auto</h2>                               
                                <div class="slide--imagem__preco">
                                    <span>
                                        <del>R$ 82,00</del>
                                        por
                                    </span>
                                    <strong>R$ 41,00</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                    </div>  
                </div>
                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn" onclick="radioselect(1)"></label>
                    <label for="radio2" class="manual-btn" onclick="radioselect(2)"></label>
                    <label for="radio3" class="manual-btn" onclick="radioselect(3)"></label>
                    <label for="radio4" class="manual-btn" onclick="radioselect(4)"></label>
                    <label for="radio5" class="manual-btn" onclick="radioselect(5)"></label>
                </div>       
            </div>
        </section>

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
                <li><a href="../ExibirJogos/index.php">Exibir Jogos</a></li>
                <li><div class="divBusca">
                    <input type="text" id="txtBusca" placeholder="Pesquisar na loja"/>
                </div></li>
                <li><a href="../ExibirVendedor/index.php">Exibir Vendedor</a></li>
                <li><a href="../ExibirCliente/index.php">Exibir Cliente</a></li>
            </ul>
        </nav>
            <script type="text/javascript" src="script.js"></script>

        <section class="conteudo-jogos">
            <section class="mais-jogados">
                <h1>Mais jogados</h1>
                <?php
                    $listaJogados = retornarJogados();
                    while($jogados = mysqli_fetch_assoc($listaJogados))
                    {
                        echo "<a href=../ExibirJogo/index.php?variavel=".$jogados["Id_Jogo"].">";
                        echo "<section class =\"mais-jogados-conteudo\">";
                        echo "<img src=\".$jogados[Imagem].\"/>";
                        echo "<h1>".$jogados["Nome"]."</h1>";
                        echo "</section>";
                        echo "</a>";
                    }
                ?>
            </section>
            <section class="mais-baixados">
                <h1>Mais Baixados</h1>
                <?php
                    $listaJogados = retornarBaixados();
                    while($jogados = mysqli_fetch_assoc($listaJogados))
                    {
                        echo "<a href=../ExibirJogo/index.php?variavel=".$jogados["Id_Jogo"].">";
                        echo "<section class =\"mais-baixados-conteudo\">";
                        echo "<img src=\".$jogados[Imagem].\"/>";
                        echo "<h1>".$jogados["Nome"]."</h1>";
                        echo "</section>";
                        echo "</a>";
                    }
                ?>
            </section>
            <section class="breve">
                <h1>Em breve</h1>
                <?php
                    $listaJogados = retornarBreve();
                    while($jogados = mysqli_fetch_assoc($listaJogados))
                    {
                        echo "<section class =\"breve-conteudo\">";
                        echo "<img src=\".$jogados[Imagem].\"/>";
                        echo "<h1>".$jogados["Nome"]."</h1>";
                        echo "</section>";
                    }
                ?>
            </section>
        </section>
        
        <section class="gratis">
            <section class="img-gratis">
                <h2>Jogo Grátis</h2>          
                <img src="../img/plagio.png" alt="Jogo gratis">
                <h2>Toda Segunda-Feira</h2>
            </section>
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