<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--IMPORT ICONS FROM Font AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://seeklogo.com/images/S/spring-logo-9A2BC78AAF-seeklogo.com.png"
        type="image/x-icon">
    <title>Conéctar</title>
    <!-- MEU CSS -->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <!-- NAV BAR -->
        <div class="navbar-fixed" id="home">
            <nav class="teal darken-3">
                <div class="container">
                    <div class="nav-wrapper ">
                        <a href="#!" class="brand-logo"><img src="img/logo.png" id="logo" alt="logo"></a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                                class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="#home">Inicio</a>
                            </li>
                            <li>
                                <a href="#search">Buscar</a>
                            </li>
                            <li>
                                <a href="#contact">Contato</a>
                            </li>
                            <li>
                                <a href="pages/login.php"
                                    class="teal darken-4 waves-effect waves-light btn-large">Juntar-se</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li>
                <a href="#home">Inicio</a>
            </li>
            <li>
                <a href="#search">Buscar</a>
            </li>
            <li>
                <a href="#contact">Contato</a>
            </li>
            <li>
                <a href="pages/login.php">Juntar-se</a>
            </li>
        </ul>
    </header>
    <main>
        <!-- Section: Slider -->
        <section class="slider">
            <ul class="slides">
                <li>
                    <img src="img/food.jpg" alt="comida">
                    <div class="caption center-align">
                        <div class="box">
                            <h2>O que nós fazemos?</h2>
                            <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                                Ajudamos a pequenos e medios restaurante a adquirirem alimentos perecíveis, atuamos na
                                coleta de pedidos por região.
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/restaurant.jpg" alt="restaurante">
                    <div class="caption left-align">
                        <div class="box">
                            <h2>Quem se beneficia?</h2>
                            <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                                Restaurantes pequenos, medios e também fornecedores que forem bem avaliados no nosso
                                site.
                            </h5>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="img/logistic.jpg" alt="logistica">
                    <div class="caption right-align">
                        <div class="box">
                            <h2>Fornecedores</h2>
                            <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                                Os fornecedores serão rankeados de acordo com as notas recebidas pelos restaurantes.
                            </h5>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Section: Search -->
        <section id="search" class="section section-search teal darken-3 white-text center scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h3>Procurar por fornecedores</h3>
                        <div class="input-field">
                            <input class="white grey-text autocomplete" placeholder="São Paulo, Sergipe, etc..."
                                type="text" id="autocomplete-input">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Icon Boxes -->
        <section class="section section-icons grey lighten-5 center">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large teal-text">room</i>
                            <h4>Aqui</h4>
                            <p>Aqui na conecta você encontrará o melhor serviço para você pequeno ou medio restaurante.
                            </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large teal-text">store</i>
                            <h4>Restaurante</h4>
                            <p>Vamos resolver o seu problema na coleta de alimentos perecíveis, conte conosco.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card-panel">
                            <i class="material-icons large teal-text">airplanemode_active</i>
                            <h4>Fornecedor</h4>
                            <p>Vamos combinar uma remessa de alimentos para os restaurantes, e rankear os melhores
                                fornecedores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Follow -->
        <section class="section section-follow teal darken-3 white-text center">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h4>Siga a Conéctar</h4>
                        <p>Acompanhe nossas redes sociais.</p>
                        <a href="#!" class="white-text">
                            <i class="icone fab fa-facebook fa-4x"></i>
                        </a>
                        <a href="#!" class="white-text">
                            <i class="icone fab fa-twitter fa-4x"></i>
                        </a>
                        <a href="#!" class="white-text">
                            <i class="icone fab fa-linkedin fa-4x"></i>
                        </a>
                        <a href="#!" class="white-text">
                            <i class="icone fab fa-google-plus fa-4x"></i>
                        </a>
                        <a href="#!" class="white-text">
                            <i class="icone fab fa-pinterest fa-4x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Contact -->
        <section id="contact" class="section section-contact scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card-panel teal white-text center">
                            <i class="material-icons medium">email</i>
                            <h5>Contate-nos para sanar dúvidas</h5>
                            <p class="justificar">Nós da Conéctar nos disponibilizamos a sanar todas as dúvidas que você
                                possa ter,
                                você pode nós contactar através desse formulário ou pelo icone do whatsapp nesta mesma
                                página.
                            </p>
                        </div>
                        <ul class="collection with-header">
                            <li class="collection-header">
                                <h4>Local</h4>
                            </li>
                            <li class="collection-item">Rua...</li>
                        </ul>
                    </div>
                    <div class="col s12 m6">
                        <div class="card-panel grey lighten-3">
                            <form action="functions/contato.php" method="POST">
                                <h5 class="center-align">Formulário de Contato</h5>
                                <div class="input-field">
                                    <input class="validate" type="text" placeholder="Nome" name="nome" required>
                                    <label for="name">Nome</label>
                                </div>
                                <div class="input-field">
                                    <input class="validate" type="email" placeholder="Email" name="email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input class="validate" type="text" placeholder="Telefone" name="telefone"
                                        onkeypress="$(this).mask('(00) 0000-00000')" required>
                                    <label for="phone">Telefone</label>
                                </div>
                                <div class="input-field">
                                    <textarea class="validate materialize-textarea" placeholder="Mensagem"
                                        name="mensagem" required></textarea>
                                    <label for="message">Mensagem</label>
                                </div>
                                <div class="center-align">
                                    <input type="submit" value="Enviar" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="teal darken-4 section white-text center">
        <p class="flow-text">Conéctar Todos os Direitos Reservados &copy; 2020</p>
    </footer>

    <!-- ADICIONANDO JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--Import JqueryMask-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="scripts/index.js"></script>
</body>

</html>