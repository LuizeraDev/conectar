<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Conécta</title>
    <!-- Icone da página -->
    <link rel="shortcut icon" href="https://seeklogo.com/images/S/spring-logo-9A2BC78AAF-seeklogo.com.png"
        type="image/x-icon">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- meu CSS -->
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <div class="login-page">
        <div class="center-align">
            <h2>Conécta</h2>
        </div>
        <div class="form">
            <form action="../functions/verifica-login.php" class="login-form" method="POST" autocomplete="off">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>

                <div class="row">
                    <div class="col s6">
                        <label>
                            <input class="with-gap" value="1" name="TipoConta" type="radio">
                            <span>Restaurante</span>
                        </label>
                    </div>
                    <div class="col s6">
                        <label>
                            <input class="with-gap" value="2" name="TipoConta" type="radio">
                            <span>Distribuidor</span>
                        </label>
                    </div>
                </div>

                <button><b>entrar</b></button>
                <p class="message">Não Registrado? <a href="#">Crie uma conta</a></p>
                <p class="message">Voltar ao site? <a href="../index.php">Voltar</a></p>
            </form>

            <form action="../functions/registro.php" class="register-form" method="POST" autocomplete="off">
                <input type="text" name="nome" placeholder="Nome restaurante ou distribuidor">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha" />
                <input name="cep" placeholder="Cep" type="text" id="cep" value="" size="10" maxlength="9"
                    onkeypress="$(this).mask('00000-000')">
                <input name="rua" placeholder="Rua" type="text" id="rua" size="60" />
                <input name="bairro" placeholder="Bairro" type="text" id="bairro" size="40" />
                <input name="cidade" placeholder="Cidade" type="text" id="cidade" size="40" />
                <input name="uf" placeholder="Uf" type="text" id="uf" size="2" />
                <div class="row">
                    <div class="col s6">
                        <label>
                            <input class="with-gap" value="1" name="TipoConta" type="radio" checked>
                            <span>Restaurante</span>
                        </label>
                    </div>
                    <div class="col s6">
                        <label>
                            <input class="with-gap" value="2" name="TipoConta" type="radio">
                            <span>Distribuidor</span>
                        </label>
                    </div>
                </div>

                <button><b>criar conta</b></button>
                <p class="message">Já tem uma conta? <a href="#">Entrar</a></p>

            </form>

        </div>
    </div>
    <!-- ADICIONANDO JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--Import JqueryMask-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!-- MEU SCRIPT -->
    <script src="../scripts/login.js"></script>
</body>

</html>