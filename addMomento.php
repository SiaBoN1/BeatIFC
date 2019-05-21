<?php
  include('includes/conexao.php');
  include('includes/verifica.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Beat IFC - Entrar</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <a><link href="img/logog.png" rel="icon">
  <link href="img/logog" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header">
    <div class="container-fluid">
        <a href="central.php"><img src="img/logog.png" width="50px" height="50px" class="logo"></a>
        <a href="http://sombrio.ifc.edu.br/"><img src="img/logoif.png" width="40px" height="50px" class="logo"></a>
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Beat IFC</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Início</a></li>
          <li><a href="#contact">Momentos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Adicionar um Momento</h2>
                <p>Adicione um momento e registre no Beat IFC cada sorriso, abraço ou olhar que marcou o ano da turma. Mostre às outras turmas os momentos especias que vocês compartilharam e vivenciaram ao longo do ano letivo.</p>
                <a href="#login" class="btn-get-started scrollto">Vamos Lá</a>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>

  <main id="main">
    <?php

          $conexao = mysqli_connect("localhost","root","","radioifc");
              if( !$conexao ){
                  echo "Ops.. Erro na conexão.";
                  exit;
              }

          $sql = "SELECT * FROM usuario WHERE codUsuario= " .$_SESSION['usuario'];
          $consulta = mysqli_query($conexao, $sql)or die(mysqli_error);

          if ($consulta->num_rows > 0){
              while( $dados = mysqli_fetch_assoc($consulta) ){
                  $turma = $dados['turma'];
                  if ($dados['turma'] == 1) {
                    $siteTurma = "1a";
                } else if ($dados['turma'] == 2){
                    $siteTurma = "1b";
                } else if ($dados['turma'] == 3){
                    $siteTurma = "1h";
                } else if ($dados['turma'] == 4){
                    $siteTurma = "2a";
                } else if ($dados['turma'] == 5){
                    $siteTurma = "2b";
                } else if ($dados['turma'] == 6){
                    $siteTurma = "2h";
                } else if ($dados['turma'] == 7){
                    $siteTurma = "3a";
                } else if ($dados['turma'] == 8){
                    $siteTurma = "3b";
                } else {
                    $siteTurma = "3h";                 
                }
              }
              
        ?>

      <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Adicionar Momento</h3>
        </div>

        <div class="form">
          <form action="salva_momento.php" method="post" role="form" class="" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="title" id="email" placeholder="Título" data-rule="minlen:4" data-msg="Por favor insira ao menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="date" class="form-control" name="data" id="email" placeholder="Data do Momento" data-rule="date" data-msg="Por favor insira uma data válida" />
                <div class="validation"></div>
              </div>
               <div class="text-center"><label class="momento1">Adicionar Foto: </label><input class="momento" type="file" name="momento" required=""/></div>
               <div class="form-group col-md-6">
                <input type="text" hidden="" value="<?php echo $siteTurma ?>" class="form-control" name="pastaM" id="email" placeholder="Descrição" data-rule="minlen:8" data-msg="Por favor insira ao menos 8 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input hidden="" type="text" name="turma" class="form-control" id="name" value="<?php echo $turma ?>" data-rule="minlen:4" data-msg=" Insira no mínimo 4 letras" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="text-center"><input name="btnCadastro" type="submit" value="Cadastrar Momento" id="cadastro"></div>
          </form>
        </div>

      </div>
      <?php
        } else {
          echo "Nenhum dado encontrado";
        }
      ?>
    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Beat IFC</h3>
            <p>Centro de compartilhamento e reprodução de músicas destinado ao Instituto Federal Catarinense Campus Avançado Sombrio, voltado à comunidade escolar. Mais informações entre em contato.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Adicionais</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Início</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#login">Login</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#cadastro">Cadastro</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="http://sombrio.ifc.edu.br/">Página IFC</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p>
              Av. Prefeito Francisco Lummertz Júnior, 930<br>
              CEP 88960-000<br>
              Sombrio/SC <br>
              <strong>Telefones:</strong> (48) 3533-4001 - <br> (48) 3533-2712<br>
              <strong>Email:</strong> beat.sombrio.ifc@hotmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/BeatIFC_Sombrio" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/BeatIFCSombrio" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/beat.ifc/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://aboutme.google.com/u/1/?referer=gplus&pageId=none" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://soundcloud.com/zombie-nerdcraft" class="linkedin"><img class="soundcloud" src="img/soundcloud.png"></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Nossa Carta</h4>
            <p class="text-final">A ideia de desenvolver um ambiente musical no IFC foi levantada pelos desenvolvedores, orientados pelos professores, e deu início à plataforma Beat IFC, onde os alunos e servidores podem apreciar a música enquanto executam suas atividades escolares.</p>
            <form action="" method="post">
              <input type="" name="email" class="subscribe"><input type="submit"  value="Inscreva-se">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <img src="img/logog.png" width="20px" height="20px" style="margin: 5px;">
        Instituto Federal de Educação, Ciência e Tecnologia Catarinense - Campus Avançado Sombrio
        <img id="direita" src="img/logog.png" width="20px" height="20px" style="margin: 5px;">
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
