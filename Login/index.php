<?php
    session_start();
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
    <div class="image">
    <section class="cadastro">
        <nav class="cadastro2">
            <h1> LOGIN </h1>
            <nav class="forms">
                <form method="POST" action="../Login/confirmacao.php">
                    <label for="fnickname">Nickname:</label><br>
                    <input type="text" id="fnickname" name="fnickname"><br>
                    <label for="fsenha">Senha:</label><br>
                    <input type="password" id="fsenha" name="fsenha"><br>
                    <input class=inputc type="submit" value="Entrar">
                </form>
            <?php
                if(isset($_SESSION['Resultado']))
                    echo $_SESSION['Resultado'];
                    unset($_SESSION['Resultado']);
            ?>
            </nav>
        </nav>
    </section>
    <footer>
        <section class="rodape">
            <section class="rodape-conteudo">
                <section class="rede-social">
                    <a href="#"><img src="img/rede-social/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="img/rede-social/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="img/rede-social/youtube.png" alt="youtube"></a>
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
        </div>
    </footer>
</body>
</html>