<?php 
    include "../functions/verifica-logado.php";
    //session_start() já está dentro desse include...
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Restaurante - Conécta</title>
  <!-- CSS das páginas -->
  <link rel="stylesheet" href="../styles/paginas-dentro.css">
  <!-- Icone da página -->
  <link rel="shortcut icon" href="https://seeklogo.com/images/S/spring-logo-9A2BC78AAF-seeklogo.com.png"
    type="image/x-icon">
  <!--IMPORT ICONS FROM Font AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body class="grey lighten-3">

  <header>
    <!--NAV INICIO-->
    <div class="navbar-fixed" id="home">
      <nav class="teal darken-3">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Conécta</a>
          <a data-target="slide-out" style="display: block; index-z: 900;"
            class="sidenav-trigger waves-effect waves-light"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a>Olá, <?php echo $_SESSION['nm_restaurante'];?></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--NAV FIM-->

    <!-- BARRA LATERAL -->
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="../img/fundo.jpg" style="width:100%;" height=300>
          </div>
          <div class="center-align">
            <a href="#user"><img class="circle" src="../img/usuario.png"></a>
          </div>
          <a href="#name"><span class="white-text name"><?php echo $_SESSION['nm_restaurante'];?></span></a>
          <a href="#email"><span class="white-text email"><?php echo $_SESSION['email_restaurante']; ?></span></a>
        </div>
      </li>
      <li>
        <a href="#"><i style="color:#005748;" class="cor fab fa-2x fas fa-cookie-bite"></i>Realizar Pedido</a>
        <a href="restaurante/avaliar-fornecedor.php"><i style="color:#005748;" class="cor fab fa-2x fas fa-star"></i>Avaliar Fornecedor</a>
        <a href="restaurante/reportar-bug.php"><i style="color:#005748;" class="cor fab fa-2x fas fa-cog"></i>Reportar Bug</a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a class="waves-effect" href="../functions/logout.php"><i style="color:#005748;" class="fab fa-2x fas fa-sign-out-alt"></i>Sair</a>
      </li>
    </ul>
  </header>

  <main>
    <div class="espacamento"></div>
    <div class="container">
      <div class="row">
        <div class="col s12 l6 offset-l3 white-text card hoverable">
          <div class="col s12 center">
            <h1 class="text-center teal-text light"><small>Realizar Pedido</small></h1>
          </div>
          <div class="input-field col s12">
            <input id="full-name" value="<?php echo $_SESSION['nm_restaurante'];?>" name="nome-restaurante" type="text"
              class="teal-text">
            <label for="full-name">Nome do restaurante</label>
          </div>
          <div class="input-field col s12">
            <input id="email" value="<?php echo $_SESSION['email_restaurante'];?>" name="email-restaurante" type="text"
              class="teal-text">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <textarea class="validate materialize-textarea" placeholder="Descrição do pedido" name="mensagem" required></textarea>
            <label for="message">Descrição do pedido</label>
          </div>
          <div class="center-align">
            <input type="submit" value="Enviar Pedido" class="btn">
          </div>
          <div class="col s12">&nbsp;</div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="teal darken-4 section white-text center">
    <p class="flow-text">Conécta Todos os Direitos Reservados &copy; 2020</p>
  </footer>

  <!-- ADICIONANDO JQUERY -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <!--Import JqueryMask-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="../scripts/paginas-dentro.js"></script>
</body>

</html>