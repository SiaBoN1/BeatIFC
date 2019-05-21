<?php
  include('includes/conexao.php');
  include('includes/verifica.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Beat IFC - Resultados da Pesquisa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/logog.png" rel="icon">
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
      <img src="img/logoif.png" width="40px" height="50px" class="logo">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Beat IFC</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#call-to-action">Pesquisa</a></li>
          <li><a href="#results">Resultados</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Procurar Músicas</h3>
        <p> Encontre a música que deseja para adicionar à playlist ou ouvir no Beat IFC.</p>
        <form class="search" method="POST" action="pesquisar.php">
          <center><input type="text" name="pesquisa" class="form-control col-md-8" id="pesquisa" placeholder="Pesquisar Músicas" list="history"></center>
        <input type="submit" class="cta-btn"  onclick="execute()" style="cursor: pointer;" value="Pesquisar">

        <datalist id="history">
        </datalist>

        </form>

        <br><h3>Procurar por Gênero</h3>
        <p>Se não sabe o nome da música desejada ou o autor, procure pelo estilo para encontrar e adicionar à playlist.</p>

        <a href="pop.php" class="cta-btn2">Pop</a>
        <a href="rock.php" class="cta-btn2">Rock</a>
        <a href="funk.php" class="cta-btn2">Funk</a>
        <a href="sertanejo.php" class="cta-btn2">Sernatejo</a>
        <a href="indie.php" class="cta-btn2">Indie</a>
        <a href="kpop.php" class="cta-btn2">K-Pop</a>
        <a href="pagode.php" class="cta-btn2">Pagode</a>
        <a href="pagode.php" class="cta-btn2">Eletrônica</a>
        <a href="eletronica.php" class="cta-btn2">Reggae</a>
        <a href="hiphop.php" class="cta-btn2">Hip Hop</a>
        <a href="alternative.php" class="cta-btn2">Alternative</a>
        <a href="classica.php" class="cta-btn2">Classica</a>
        <a href="trap.php" class="cta-btn2">Trap</a>
        <a href="outro.php" class="cta-btn2">Outro</a>
        
      </div>
    </section>

    <section id="results">
        <header class="section-header wow fadeInUp">
          <h3>Resultados</h3>
        </header>

      <div class="container text-center">
        <ul class="ul wow fadeInUp" data-wow-delay="0.2s">
          <center>
                <?php

        $conexao = mysqli_connect("localhost","root","","radioifc");
                    if( !$conexao ){
                        echo "Ops.. Erro na conexão.";
                        exit;
                    }

        $sql = "SELECT * FROM musica WHERE genero = '1'";
        $consulta = mysqli_query($conexao, $sql)or die(mysqli_error);
        $checaT = "SELECT turma FROM usuario WHERE codUsuario =".$_SESSION['usuario'];
        $consultaTu = mysqli_query($conexao, $checaT);
          if ($consultaTu->num_rows > 0){
              while( $dadosTu = mysqli_fetch_assoc($consultaTu) ){
                  if ($dadosTu['turma'] == 1) {
                    $idTurma = "1a";
                } else if ($dadosTu['turma'] == 2){
                    $idTurma = "1b";
                } else if ($dadosTu['turma'] == 3){
                    $idTurma = "1h";
                } else if ($dadosTu['turma'] == 4){
                    $idTurma = "2a";
                } else if ($dadosTu['turma'] == 5){
                    $idTurma = "2b";
                } else if ($dadosTu['turma'] == 6){
                    $idTurma = "2h";
                } else if ($dadosTu['turma'] == 7){
                    $idTurma = "3a";
                } else if ($dadosTu['turma'] == 8){
                    $idTurma = "3b";
                } else {
                    $idTurma = "3h";                 
                }
              }

      if ($consulta->num_rows > 0){
        while ($dados = mysqli_fetch_array($consulta)) {
          echo "<li class='itemMsc'>".$dados['nome']. " - ".$dados['autor']." <form action='salva_play".$idTurma.".php' method='post'><input hidden='' type='text' value='".$dados['nome']."' name='nomeCad'/><input hidden='' type='text' value='".$dados['autor']."' name='autorCad'/><button type='submit' name='addMsc' class='add-btn' title='Adicionar'><i class='ion ion-plus'></i></button></form>
</li>"."<br>";

        }
      } else {
        echo "Nenhuma música encontrada.";
        }
      }
      ?>
      </center>
        </ul>
      </div>

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
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Início</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
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
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="" name="email" class="subscribe"><input type="submit"  value="Subscribe">
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

<script src="contactform/contactform.js"></script>

<script src="js/main.js"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src="https://w.soundcloud.com/player/api.js"></script>

<script>

  function loadPageProfile() {
      $("#daniel").load("perfil.php");
  }

  var iframeElement   = document.querySelector('iframe');
  var iframeElementID = iframeElement.id;
  var widget          = SC.Widget(iframeElement);

  var initVolume = 100;
  setVolume(initVolume);

  var ControllerPlayer = false;

  function getDataMusic(){

      widget.getCurrentSound(function(sound){

          $(".nomeMusica").text((sound['title']));
          $(".imgMusic").attr("src", sound['artwork_url']);

      });

  }

  function setVolume(myVolume) {

      widget.setVolume(myVolume);

  }

  $(".testefon").click(function(){

      widget.toggle();

      if(ControllerPlayer == true){
          ControllerPlayer = false;
          $("#radioSts").text("OFF");
          $("#radioSts").removeClass('radioStsOn');
          $("#radioSts").addClass('radioStsOff');
          $(".ppBtn").attr("src","img/play1.png");

      }else if(ControllerPlayer == false){
          ControllerPlayer = true;
          $("#radioSts").text("ON");
          $("#radioSts").addClass('radioStsOn');
          $("#radioSts").removeClass('radioStsOff');
          $(".ppBtn").attr("src","img/pause1.png");
      }

      getDataMusic();

  });



  $(".prev").click(function(){
      widget.prev();
      widget.seekTo(0);
      ControllerPlayer = true;
      $("#radioSts").text("ON");
      $("#radioSts").addClass('radioStsOn');
      $("#radioSts").removeClass('radioStsOff');
      $(".ppBtn").attr("src","img/pause1.png");
  });

  $(".next").click(function(){
      widget.next();
      widget.seekTo(0);
      ControllerPlayer = true;
      $("#radioSts").text("ON");
      $("#radioSts").addClass('radioStsOn');
      $("#radioSts").removeClass('radioStsOff');
      $(".ppBtn").attr("src","img/pause1.png");
  });

  widget.bind(SC.Widget.Events.PLAY_PROGRESS, function() {

      getDataMusic();

  });

  $("#volume").slider({

      min: 0,
      max: 100,
      value: initVolume,
      range: "min",
      slide: function(event, ui) {
          setVolume(ui.value);
      }

  });

</script>

</body>
</html>
