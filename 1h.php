<?php
  include('includes/conexao.php');
  include('includes/verifica.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Beat IFC - Primeiro Ano H</title>
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
          <li class="menu-active"><a href="#intro">Início</a></li>
          <li><a href="#services">Playlist</a></li>
          <li><a href="#portfolio">Momentos</a></li>
          <li><a href="#team">Alunos</a></li>
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
            <div class="carousel-background"><img src="img/turma/1h/1h-2019.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Primeiro Ano H</h2>
                <p>Turma de veteranos da turma 3° A do Instituto Federal Catarinense - Campus Avançado Sombrio. Turma da Chatuba FC, Golden Shower E-Sports e muito mais.</p>
                <a href="#team" class="btn-get-started scrollto">Conheça a Turma</a>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>

  <main id="main">

    <section id="featured-services" class="player">
      <div class="container">
        <div class="row">
          <iframe width="100%" height="0" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/783425190&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

          <div class="col-lg-4 box">
            <center>
              <img src="img/logog.png" class="imgMusic">
              <div class="slider">
                <marquee class="marquee" onmouseover="this.stop()" onmouseout="this.start()"><label class="nomeMusica">Nenhuma música em reprodução</label></marquee>
              </div>
            </center>
          </div>

          <div class="col-lg-4 box box-bg" id="box-central">
            <center><div class="playerBtn" >
              <button class="prev"><div class="iconP"><i class="ion-ios-skipbackward"></i></div></button>
              <button class="testefon"><div class="icon"><i id="btnIcon" class="ion-ios-play ppBtn"></i></div></button>             
              <button class="next"><div class="iconN"><i class="ion-ios-skipforward"></i></div></button>
            </div>
            <div class="radio"><label>Beat IFC - CAS <span class="radioStsOff" id="radioSts">OFF</span></label></div>
            <div class="volumeFon">
              <div id="player-volume">
                <img src="img/volume2.png" id="volumeIcon">
                  <div id="volume"></div> 
              </div>
            </div>
            <a target="blank" href="https://soundcloud.com/" class="reference"><img src="img/reference.png"></a>
          </center>
          </div>

          <div class="col-lg-4 box">
            <center>
              <ul class="playlist-list">
                <?php
                  $buscaM = "SELECT * FROM play1b";
                  $consultaM = mysqli_query($conexao, $buscaM);
                  if( !$consultaM ){
                      echo "Erro ao realizar consulta. Tente outra vez.";
                      exit;
                  } 

                  if ($consultaM->num_rows > 0){
                  while( $nomeM = mysqli_fetch_assoc($consultaM) ){
                      echo "<li><span>".$nomeM['nomeMusica']. "</span> - ".$nomeM['autor']."</li>";
                      }
                  } else {
                    echo "Não há músicas cadastradas nessa playlist.";
                  }
                ?>
              </ul>
            </center>
          </div>

        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Playlist</h3>
          <p>Conheça a playlist criada pelos calouros do 1°H e saiba quais hits não saem de seus ouvidos.</p>
          <?php
            $checagem = "SELECT turma FROM usuario WHERE codUsuario =".$_SESSION['usuario'];
            $katiau = mysqli_query($conexao, $checagem)or die(mysqli_error);
            if ($katiau->num_rows > 0){
              while( $hurdur = mysqli_fetch_assoc($katiau) ){
                  $turma = $hurdur['turma'];
            if ($turma == '3') {
              echo "<center><div class='iconFon'><a href='addMomento.php'><i class='ion ion-edit'></i></a></div></center>";
            }
          }
        }
          ?>
        </header>

        <div class="row">

          <div class="col-lg-12 col-md-12 box wow bounceInUp" data-wow-duration="1.4s">
            <center><?php
                  $buscaM = "SELECT * FROM play1h";
                  $consultaM = mysqli_query($conexao, $buscaM);
                  if( !$consultaM ){
                      echo "Erro ao realizar consulta. Tente outra vez.";
                      exit;
                  } 

                  if ($consultaM->num_rows > 0){
                  while( $nomeM = mysqli_fetch_assoc($consultaM) ){
                      echo "<li class='listaOficial'><span>".$nomeM['nomeMusica']. "</span> - ".$nomeM['autor']."</li>";
                      }
                  } else {
                    echo "Não há músicas cadastradas nessa playlist.";
                  }
                ?>
            </center> 
          </div>

        </div>

      </div>
    </section>

    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Procurar Músicas</h3>
        <p> Encontre a música que deseja para adicionar à playlist ou ouvir no Beat IFC.</p>
        <center><input type="text" name="pesquisa" class="form-control col-md-8" id="pesquisa" placeholder="Pesquisar Músicas"></center>
        <a class="cta-btn" href="#">Pesquisar</a>
      </div>
    </section>

    <section id="portfolio"  class="section-bg" >

      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Momentos 1H</h3>
          <?php
            $checagem = "SELECT turma FROM usuario WHERE codUsuario =".$_SESSION['usuario'];
            $katiau = mysqli_query($conexao, $checagem)or die(mysqli_error);
            if ($katiau->num_rows > 0){
              while( $hurdur = mysqli_fetch_assoc($katiau) ){
                  $turma = $hurdur['turma'];
            if ($turma == '3') {
              echo "<center><div class='iconFon'><a href='addMomento.php'><i class='ion ion-plus'></i></a></div></center>";
            }
          }
        }
          ?>
        </header>

        <div class="row portfolio-container">

                   <?php
                  $buscaMo = "SELECT * FROM momentos WHERE codTurma = '3'";
                  $consultaMo = mysqli_query($conexao, $buscaMo);
                  if( !$consultaMo ){
                      echo "Erro ao realizar consulta. Tente outra vez.";
                      exit;
                  } 

                  if ($consultaMo->num_rows > 0){
                  while( $nomeMo = mysqli_fetch_assoc($consultaMo) ){
                      echo "
                        <div class='col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp'>
                          <div class='portfolio-wrap'>
                            <figure>
                              <img src='".$nomeMo['fotoMomento']."' class='img-fluid' alt=''>
                              <a href='".$nomeMo['fotoMomento']."' data-lightbox='portfolio' data-title='".$nomeMo['title']."' class='link-preview' title='Ver Mais'><i class='ion ion-eye'></i></a>
                              <a href='#team' class='link-details' title='More Details'><i class='ion ion-android-open'></i></a>
                            </figure>

                            <div class='portfolio-info'>
                              <h4><a href='#''>".$nomeMo['title']."</a></h4>
                              <p class='dataM'>".$nomeMo['data']."</p>
                            </div>
                          </div>
                        </div>";
                      }
                  } else {
                    echo "Não há momentos cadastrados nessa turma.";
                  }
                ?> 
        </div>

      </div>
    </section>

    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Alunos</h3>
          <p>Conheça os integrantes da turma do Primeiro Ano H.</p>
        </div>

        <div class="row">

          <?php
                  $buscaA = "SELECT * FROM usuario WHERE turma = '3' ORDER BY nome ASC";
                  $consultaA = mysqli_query($conexao, $buscaA);
                  if( !$consultaA ){
                      echo "Erro ao realizar consulta. Tente outra vez.";
                      exit;
                  } 

                  if ($consultaA->num_rows > 0){
                  while( $nomeA = mysqli_fetch_assoc($consultaA) ){
                      echo "<div class='col-lg-3 col-md-6 wow fadeInUp'>
                              <div class='member'>
                                <img src='".$nomeA['avatar']."' class='img-fluid' alt=''>
                                <div class='member-info'>
                                  <div class='member-info-content'>
                                    <h4>".$nomeA['nome']."</h4>
                                    <span>".$nomeA['usuario']."</span>
                                    <div class='social'>";
                                    if (! is_null($nomeA['twitter'])) {
                                      echo "<a target='blank' href='".$nomeA['twitter']."'><i class='fa fa-twitter'></i></a>";
                                    };
                                    if (! is_null($nomeA['facebook'])) {
                                      echo "<a target='blank' href='".$nomeA['facebook']."'><i class='fa fa-facebook'></i></a>";
                                    };
                                    if (! is_null($nomeA['facebook'])) {
                                    echo "
                                      <a target='blank' href='".$nomeA['instagram']."'><i class='fa fa-instagram'></i></a>";
                                    };
                                    echo "
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>";
                      }
                  } else {
                    echo "Não há alunos cadastrados nessa turma.";
                  }
                ?>

        </div>

      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Beat IFC</h3>
            <p class="">Centro de compartilhamento e reprodução de músicas destinado ao Instituto Federal Catarinense Campus Avançado Sombrio, voltado à comunidade escolar. Mais informações entre em contato.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Adicionais</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Início</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#team">Turma</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="central.php">Central</a></li>
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
        $("#btnIcon").removeClass('ion-ios-pause');
        $("#btnIcon").addClass('ion-ios-play');

    }else if(ControllerPlayer == false){
        ControllerPlayer = true;
        $("#radioSts").text("ON");
        $("#radioSts").addClass('radioStsOn');
        $("#radioSts").removeClass('radioStsOff');
        $("#btnIcon").removeClass('ion-ios-play');
        $("#btnIcon").addClass('ion-ios-pause');
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
    $("#btnIcon").removeClass('ion-ios-play');
    $("#btnIcon").addClass('ion-ios-pause');
});

$(".next").click(function(){
    widget.next();
    widget.seekTo(0);
    ControllerPlayer = true;
    $("#radioSts").text("ON");
    $("#radioSts").addClass('radioStsOn');
    $("#radioSts").removeClass('radioStsOff');
    $("#btnIcon").removeClass('ion-ios-play');
    $("#btnIcon").addClass('ion-ios-pause');});

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
