<?php 
      include "../../functions/conecta-banco.php";
      require "base.php";
      //session_start() já está dentro desse include...
  
      // RETORNA O NOME DA IMAGEM DO RESTAURANTE JUNTAMENTE COM SUA EXTENSÃO
      $email = $_SESSION['email_restaurante'];
      $comandoSQL = "SELECT img_restaurante from tb_restaurante WHERE email_restaurante='$email'";
      $resultado_usuario = mysqli_query($con, $comandoSQL);
      $total = mysqli_num_rows($resultado_usuario);
      if($total === 1){
        $pegaimg = mysqli_fetch_array($resultado_usuario);
        $_SESSION['img_restaurante'] = $pegaimg['img_restaurante'];
      }
?>
  <main>
    <div class="espacamento"></div>
    <div class="container">
      <div class="row">
        <div class="col s12 l6 offset-l3 white-text card hoverable">
          <div class="col s12 center">
            <h1 class="text-center teal-text light"><small>Editar Perfil</small></h1>
            <?php
                $codigo = $_SESSION["cd_restaurante"];
                $nomearquivo = $_SESSION["img_restaurante"];
                $dir = '../../img_restaurantes/'.$codigo.'/'.$nomearquivo;
                if(is_dir($dir))
                echo"<img class='circle' width=200 src='../../img/usuario.png'>";
                else
                echo "<img class='circle' width=200 alt='foto' src='../../img_restaurantes/$codigo/$nomearquivo'>";
            ?>
            <form action="envia-foto.php" enctype="multipart/form-data" method="POST">
              <div class="file-field input-field">
                <div class="btn">
                  <span>Arquivo</span>
                  <input type="file" name="arquivo" placeholder="Foto de Perfil">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              <input type="submit" value="Atualizar foto" class="btn">
            </form>
          </div>
          <div class="col s12">&nbsp;</div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="teal darken-4 section white-text center">
    <p class="flow-text">Conéctar Todos os Direitos Reservados &copy; 2020</p>
  </footer>

  <!-- ADICIONANDO JQUERY -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <!--Import JqueryMask-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="../../scripts/paginas-dentro.js"></script>
</body>

</html>