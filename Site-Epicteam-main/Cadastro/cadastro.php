<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Epicteam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section class="cabecalho-conteudo">
            <section class="logo">
                <img src="img/logo.png" alt="Epiteam logo">
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
    <div class="image">
    <section class="cadastro">
        <nav class="cadastro2">
            <h1> CADASTRAR-SE </h1>
            <nav class="forms">
                <form method="POST" action="../Cadastro/cadastroCliente.php">
                    <label for="femail">E-mail:</label><br>
                    <input type="text" id="femail" name="femail"><br>
                    <label for="fnickname">Nickname:</label><br>
                    <input type="text" id="fnickname" name="fnickname"><br>
                    <label for="fsenha">Senha:</label><br>
                    <input type="password" id="fsenha" name="fsenha"><br>
                    <label for="tipo">Tipo de conta:</label><br><br>
                    <nav class="tipoconta">
                        <label for="cliente"> Cliente </label>
                        <input type="radio" id="tipo" name="tipo" value="cliente"><br>
                        <label for="vendedor"> Vendedor </label>
                        <input type="radio" id="tipo" name="tipo" value="vendedor">
                    </nav>
                    <input class=inputc type="submit" value="Cadastrar">
                </form>
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