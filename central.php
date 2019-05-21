<?php
  include('includes/conexao.php');
  include('includes/verifica.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Beat IFC - Central</title>
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

  <script type="text/javascript">
    
    function execute() {
      var text = document.getElementById('pesquisa').value;
      var list = document.getElementById('history');
      var add = true;

      var opt =  document.createElement('option');

      for (var i = 0; i < list.options,length; i++) {
        if (text==list.options[i].value) {
          add = false; 
        }
      }

      if (add == true) {
        opt.value = text;
        list.appendChil(opt);
      }
    }

  </script>

</head>

<body>

  <header id="header">
    <div class="container-fluid">
      <img src="img/logog.png" width="50px" height="50px" class="logo">
      <img src="img/logoif.png" width="40px" height="50px" class="logo">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Beat IFC</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Início</a></li>
          <li><a href="#about">Perfil</a></li>
          <li><a href="#services">Músicas</a></li>
          <li><a href="#portfolio">Turmas</a></li>
          <li><a href="#team">Equipe</a></li>
          <li><a href="#contact">Contato</a></li>
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
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Bem-Vindo ao Beat IFC</h2>
                <p>O Beat IFC é uma plataforma de streaming de músicas da comunidade escolar e promove a interação das turmas através do compartilhamento de estilos musicais. Seja para lazer ou para estudo, o Beat IFC pode te ajudar a encontrar a sintonia certa.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Começar Agora</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ouça músicas e compartilhe seu estilo</h2>
                <p>Através do Beat IFC você tem acesso a diversas músicas e pode compartilhar com seus colegas e amigos. Recomende músicas, descubra novos estilos e faça parte da maior comunidade musical do Instituto Federal Catarinense - Campus Avançado Sombrio.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Comece a Ouvir</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Cada um com seu cada qual</h2>
                <p>Conheça as turmas do IFC - CAS e o que cada um anda ouvindo. Encontre a sua turma e adicione músicas para ouvir com seus colegas e </p>
                <a href="#portifolio" class="btn-get-started scrollto">Conheça as Turmas</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Faça seu pedido</h2>
                <p>Através da ferramenta "Rádio IFC" você poderá enviar seu pedido de música para ser reproduzido durate o período escolar. Seu pedido será atentido durante os intervalos e poderá aproveitar o melhor da música no IFC - CAS.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Fazer Pedido</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>

  <main id="main">

    <section id="featured-services" class="player">
      <div class="container">
        <div class="row">
          <iframe width="100%" height="0" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/621096105&color=%2331e61b&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

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
                  $buscaM = "SELECT * FROM musica";
                  $consultaM = mysqli_query($conexao, $buscaM);
                  if( !$consultaM ){
                      echo "Erro ao realizar consulta. Tente outra vez.";
                      exit;
                  } 

                  if ($consultaM->num_rows > 0){
                  while( $nomeM = mysqli_fetch_assoc($consultaM) ){
                      echo "<li class='listM'>".$nomeM['nome']. " - ".$nomeM['autor']."</li>";
                      }
                  }
                ?>
              </ul>
            </center>
          </div>

        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
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
                  $nome = $dados['nome'];
                  $usuario = $dados['usuario'];
                  $bio = $dados['bio'];
                  $email = $dados['email'];
                  $matricula = $dados['matricula'];
                  $avatar = $dados['avatar'];
                  $curso = $dados['curso'];
                  $cursoCompleto = '';
                  if ($dados['curso'] == 1) {
                      $curso = "Informática";
                      $cursoCompleto = "Técnico Integrado em Informática";
                  } else if ($dados['curso'] == 2){
                      $curso = "Hospedagem";                    
                  }

                  $turma = $dados['turma'];

                if ($dados['turma'] == 1) {
                    $turmaN = "1° Ano A";
                    $siteTurma = "1a";
                } else if ($dados['turma'] == 2){
                    $turmaN = "1° Ano B";
                    $siteTurma = "1b";
                } else if ($dados['turma'] == 3){
                    $turmaN = "1° Ano H";
                    $siteTurma = "1h";
                } else if ($dados['turma'] == 4){
                    $turmaN = "2° Ano A";
                    $siteTurma = "2a";
                } else if ($dados['turma'] == 5){
                    $turmaN = "2° Ano B"; 
                    $siteTurma = "2b";
                } else if ($dados['turma'] == 6){
                    $turmaN = "2° Ano H";
                    $siteTurma = "2h";
                } else if ($dados['turma'] == 7){
                    $turmaN = "3° Ano A";
                    $siteTurma = "3a";
                } else if ($dados['turma'] == 8){
                    $turmaN = "3° Ano B";
                    $siteTurma = "3b";
                } else {
                    $turmaN = "3° Ano H";  
                    $siteTurma = "3h";                 
                }
              }
        ?>

        <header class="section-header">
          <h3>Perfil de Usuário</h3>
          <img src="">
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <center><div class="img-wrapper"><img id="avatar" src="<?php echo $avatar; ?>" alt="" class="img-fluid"></center>
                <div class="icon"><a href="#aboutModal"  data-toggle="modal" data-target="#myModalPerfil"><i class="ion-ios-eye"></i></a></div>
              </div>
              <h2 class="title"><a href="#aboutModal"  data-toggle="modal" data-target="#myModalPerfil"><?php echo $nome ?></a></h2>
              <center>
                <label>Turma: <?php echo $turmaN; ?></label><br>
                <label>Curso: <?php echo $curso; ?></label>
              </center>
            </div>
          </div>

          <div data-backdrop="false" class="modal fade" id="myModalPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="corpoModal">
            <div class="modal-dialog">
                <div class="modal-content" id="conteudo">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Perfil</h4>
                        <a href="logout.php"><i title="Sair" class="ion ion-log-out"></i></a>
                    </div>
                    <div class="modal-body">
                        <center>
                        <img src="<?php echo $avatar ?>" name="aboutme" width="140" height="140" border="0" class="img-circle">
                        <h3 class="media-heading"><?php echo $nome ?> <small><?php echo $turmaN ?></small></h3>
                        <span><strong>Curso: </strong> <?php echo $cursoCompleto ?></span><br>
                        <span><strong>Email: </strong> <?php echo $email ?></span><br>
                        <span><strong>Usuário: </strong> <?php echo $usuario ?></span>
                        </center>
                        <hr>
                        <center>
                        <p class="text-left"><strong>Bio: </strong><br>
                            <?php echo $bio ?></p>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <center>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i title="Fechar" class="ion ion-close"></i></button>
                        </center>
                    </div>
                </div>
            </div>
          </div>
          </div>

          <div id="cardPerfil" class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT = "SELECT * FROM turma WHERE codTurma =".$turma;
              $consultaT = mysqli_query($conexao, $buscaT);
                if ($consultaT->num_rows > 0){
                  while( $dadosT = mysqli_fetch_assoc($consultaT)){
                    $nomeTurma = $dadosT['nomeTurma'];
                    $imgTurma = $dadosT['fotoTurma'];
                    $descricao = $dadosT['descricao'];
                  }
            ?>

            <div class="about-col">
              <div class="img">
                <div class="img-wrapper"><img src="<?php echo $imgTurma ?>" alt="" class="img-fluid" id="cardPfImg">
                </div>
                <div class="icon"><a href="<?php echo $siteTurma ?>.php"><i class="ion-ios-people"></i></a></div>
              </div>
              <h2 class="title"><a href="<?php echo $siteTurma ?>.php">Grupo <?php echo $nomeTurma; ?></a></span></h2>
              <center>
                <label>Clique para acessar a turma.</label>
                <label>Mais informações na página.</label>
              </center> 
            </div>
          </div>

                <?php
            } else {
              echo "Nenhum dado encontrado";
            }
          ?>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <div class="img-wrapper"><img src="img/intro-carousel/1.jpg" alt="" class="img-fluid" id="cardPfImg"></div>
                <div class="icon"><a href="editarUsuario.php"><i class="ion-ios-gear"></i></a></div>
              </div>
              <h2 class="title"><a href="editarUsuario.php">Configurações</a></h2>
              <center>
                <label>Acessar as configurações de Usuário.</label>
                <label class="gambiarra">______________________________</label>
              </center>
            </div>
          </div>
        </div>
        </div>

          <?php
            } else {
              echo "Nenhum dado encontrado";
            }
          ?> 
      </div>
    </section>

    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Músicas</h3>
          <p>Pesquise seus músicas favoritas e adicone-as à playlist da turma, compartilhe com seus amigos ou faça seu pedido para ouvir durate a aula.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Descubra Estilos</a></h4>
            <p class="description">Tenha acesso a músicas de diversos gêneros e encontre novos hits para ouvir com a galera.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Adicione à Playlist</a></h4>
            <p class="description">Selecione as músicas que gosta em um único lugar e aproveite o melhor do Beat IFC.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Faça seu pedido</a></h4>
            <p class="description">Envie seu pedido de músicas para a rádio e ouça durante as aulas, seja para relaxar ou estudar.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Compartilhe com os amigos</a></h4>
            <p class="description">Mostre aos seus amigos aquela música que não sai dos seus ouvidos e junte a galera para curtir.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="#contact">Envie sugestões</a></h4>
            <p class="description">Se não encontrar a música que deseja, reporte para a central para adicioná-la na biblioteca.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-heart-outline"></i></div>
            <h4 class="title"><a href="">Divirta-se</a></h4>
            <p class="description">Curta o melhor da música no Beat IFC, colaborando para um ambiente escolar mais divertido.</p>
          </div>

        </div>

      </div>
    </section>

    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Procurar Músicas</h3>
        <p> Encontre a música que deseja para adicionar à playlist ou ouvir no Beat IFC.</p>
        <form class="search" method="POST" action="pesquisar.php">
          <center><input type="text" name="pesquisa" class="form-control col-md-8" id="pesquisa" placeholder="Pesquisar Músicas" list="history"></center>
        <input type="submit" class="cta-btn"  onclick="execute()" style="cursor: pointer;" value="Pesquisar">

        <datalist id="history">
            <option value="Pop"></option>
            <option value="Rock"></option>
            <option value="Funk"></option>
            <option value="Indie"></option>
            <option value="Sertanejo"></option>
            <option value="Eletrônica"></option>
            <option value="Pagode"></option>
        </datalist>
          
        </form>
      </div>
    </section>

    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Curiosidades</h3>
          <p>Características do Beat IFC de acordo com as informações coletadas.</p>
        </header>

        <div class="row counters">

          <?php
          $sql7 = "SELECT MAX(codMusica) AS codMusica FROM musica";
          $consulta7 = mysqli_query($conexao, $sql7);
          if ($consulta7->num_rows > 0){
            while( $dados7 = mysqli_fetch_assoc($consulta7)){
              $fon2 = $dados7["codMusica"];
            }
          ?>
  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $fon2 ?></span>
            <p>Músicas</p>
  				</div>
          <?php
            } else {
              echo "Nenhum dado encontrado";
            }
          ?>

          <?php
          $sql6 = "SELECT MAX(codUsuario) AS codUsuario FROM usuario";
          $consulta6 = mysqli_query($conexao, $sql6);
          if ($consulta6->num_rows > 0){
            while( $dados6 = mysqli_fetch_assoc($consulta6)){
              $fon = $dados6["codUsuario"];
            }
          ?>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $fon ?></span>
            <p>Usuários</p>
  				</div>
          <?php
            } else {
              echo "Nenhum dado encontrado";
            }
          ?>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Horas de Uso</p>
  				</div>

          <?php
          $sql8 = "SELECT MAX(codGenero) AS codGenero FROM genero";
          $consulta8 = mysqli_query($conexao, $sql8);
          if ($consulta8->num_rows > 0){
            while( $dados8 = mysqli_fetch_assoc($consulta8)){
              $fon8 = $dados8["codGenero"];
            }
          ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $fon8 ?></span>
            <p>Estilos</p>
  				</div>
          <?php
            } else {
              echo "Nenhum dado encontrado";
            }
          ?>

  			</div>

        <div class="facts-img">
          <img src="img/MontagemBIFT.png" alt="" class="img-fluid">
        </div>

      </div>
    </section>

    <section id="portfolio"  class="section-bg" >

      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Turmas IFC</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">1° Ano</li>
              <li data-filter=".filter-card">2° Ano</li>
              <li data-filter=".filter-web">3° Ano</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT1 = "SELECT * FROM turma WHERE codTurma = '1'";
              $consultaT1 = mysqli_query($conexao, $buscaT1);
                if ($consultaT1->num_rows > 0){
                  while( $dadosT1 = mysqli_fetch_assoc($consultaT1)){
                    $nomeTurma1 = $dadosT1['nomeTurma'];
                    $imgTurma1 = $dadosT1['fotoTurma'];
                    $descricao1 = $dadosT1['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma1 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma1 ?>" data-lightbox="portfolio" data-title="<?php echo $nomeTurma1 ?>" class="link-preview" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="1a.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="1a.php"><?php echo $nomeTurma1 ?></a></h4>
                <p><?php echo $descricao1 ?></p>
              </div>
            </div>
              <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <?php
                $conexao->query("SET NAMES utf8");
                $buscaT4 = "SELECT * FROM turma WHERE codTurma = '4'";
                $consultaT4 = mysqli_query($conexao, $buscaT4);
                  if ($consultaT4->num_rows > 0){
                    while( $dadosT4 = mysqli_fetch_assoc($consultaT4)){
                      $nomeTurma4 = $dadosT4['nomeTurma'];
                      $imgTurma4 = $dadosT4['fotoTurma'];
                      $descricao4 = $dadosT4['descricao'];
                    }
              ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma4 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma4 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma4 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="2a.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="2a.php"><?php echo $nomeTurma4 ?></a></h4>
                <p><?php echo $descricao4 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT7 = "SELECT * FROM turma WHERE codTurma = '7'";
              $consultaT7 = mysqli_query($conexao, $buscaT7);
                if ($consultaT7->num_rows > 0){
                  while( $dadosT7 = mysqli_fetch_assoc($consultaT7)){
                    $nomeTurma7 = $dadosT7['nomeTurma'];
                    $imgTurma7 = $dadosT7['fotoTurma'];
                    $descricao7 = $dadosT7['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma7 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma7 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma7 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="3a.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="3a.php"><?php echo $nomeTurma7 ?></a></h4>
                <p><?php echo $descricao7 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT2 = "SELECT * FROM turma WHERE codTurma = '2'";
              $consultaT2 = mysqli_query($conexao, $buscaT2);
                if ($consultaT2->num_rows > 0){
                  while( $dadosT2 = mysqli_fetch_assoc($consultaT2)){
                    $nomeTurma2 = $dadosT2['nomeTurma'];
                    $imgTurma2 = $dadosT2['fotoTurma'];
                    $descricao2 = $dadosT2['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma2 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma2 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma2 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="1b.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="1b.php"><?php echo $nomeTurma2 ?></a></h4>
                <p><?php echo $descricao2 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT5 = "SELECT * FROM turma WHERE codTurma = '5'";
              $consultaT5 = mysqli_query($conexao, $buscaT5);
                if ($consultaT5->num_rows > 0){
                  while( $dadosT5 = mysqli_fetch_assoc($consultaT5)){
                    $nomeTurma5 = $dadosT5['nomeTurma'];
                    $imgTurma5 = $dadosT5['fotoTurma'];
                    $descricao5 = $dadosT5['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma5 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma5 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma5 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="2b.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="2b.php"><?php echo $nomeTurma5 ?></a></h4>
                <p><?php echo $descricao5 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT8 = "SELECT * FROM turma WHERE codTurma = '8'";
              $consultaT8 = mysqli_query($conexao, $buscaT8);
                if ($consultaT8->num_rows > 0){
                  while( $dadosT8 = mysqli_fetch_assoc($consultaT8)){
                    $nomeTurma8 = $dadosT8['nomeTurma'];
                    $imgTurma8 = $dadosT8['fotoTurma'];
                    $descricao8 = $dadosT8['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma8 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma8 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma8 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="3b.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="3b.php"><?php echo $nomeTurma8 ?></a></h4>
                <p><?php echo $descricao8 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT3 = "SELECT * FROM turma WHERE codTurma = '3'";
              $consultaT3 = mysqli_query($conexao, $buscaT3);
                if ($consultaT3->num_rows > 0){
                  while( $dadosT3 = mysqli_fetch_assoc($consultaT3)){
                    $nomeTurma3  = $dadosT3['nomeTurma'];
                    $imgTurma3 = $dadosT3['fotoTurma'];
                    $descricao3 = $dadosT3['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma3 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma3 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma3 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="1h.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="1h.php"><?php echo $nomeTurma3 ?></a></h4>
                <p><?php echo $descricao3 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT6 = "SELECT * FROM turma WHERE codTurma = '6'";
              $consultaT6 = mysqli_query($conexao, $buscaT6);
                if ($consultaT6->num_rows > 0){
                  while( $dadosT6 = mysqli_fetch_assoc($consultaT6)){
                    $nomeTurma6 = $dadosT6['nomeTurma'];
                    $imgTurma6 = $dadosT6['fotoTurma'];
                    $descricao6 = $dadosT6['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma6 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma6 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma6 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="2h.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="2h.php"><?php echo $nomeTurma6 ?></a></h4>
                <p><?php echo $descricao6 ?></p>
              </div>
            </div>
            <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <?php
              $conexao->query("SET NAMES utf8");
              $buscaT9 = "SELECT * FROM turma WHERE codTurma = '9'";
              $consultaT9 = mysqli_query($conexao, $buscaT9);
                if ($consultaT9->num_rows > 0){
                  while( $dadosT9 = mysqli_fetch_assoc($consultaT9)){
                    $nomeTurma9 = $dadosT9['nomeTurma'];
                    $imgTurma9 = $dadosT9['fotoTurma'];
                    $descricao9 = $dadosT9['descricao'];
                  }
            ?>
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo $imgTurma9 ?>" class="img-fluid" alt="">
                <a href="<?php echo $imgTurma9 ?>" class="link-preview" data-lightbox="portfolio" data-title="<?php echo $nomeTurma9 ?>" title="Ver Mais"><i class="ion ion-eye"></i></a>
                <a href="3h.php" class="link-details" title="Mais Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="3h.php"><?php echo $nomeTurma9 ?></a></h4>
                <p><?php echo $descricao9 ?></p>
              </div>
            </div>
          </div>
          <?php
                } else {
                  echo "Nenhum dado encontrado";
                }
              ?>
        </div>

      </div>

    </section>

    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Softwares IFC</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/logoTxt.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>

    
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipe</h3>
          <p>Conheça a equipe que desenvolveu a platarforma Beat IFC.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Guilherme Bon</h4>
                  <span>Desenvolvedor</span>
                  <div class="social">
                    <a target="blank" href="https://twitter.com/GuilhermeOBon"><i class="fa fa-twitter"></i></a>
                    <a target="blank" href="https://www.facebook.com/guilherme.alexandre.14019"><i class="fa fa-facebook"></i></a>
                    <a target="blank" href="https://plus.google.com/u/0/113627983325968873558?tab=wX"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ellen Cosmo</h4>
                  <span>Desenvolvedora</span>
                  <div class="social">
                    <a target="blank" href="https://twitter.com/sasukedge?s=09"><i class="fa fa-twitter"></i></a>
                    <a target="blank" href="https://www.facebook.com/profile.php?id=100012280810763"><i class="fa fa-facebook"></i></a>
                    <a target="blank" href="https://plus.google.com/104956463733502776157"><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jeferson Limas</h4>
                  <span>Orientador</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tereza Lautério</h4>
                  <span>Co-Orientadora</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Entre em Contato</h3>
          <p>Envie sugestões de melhorias, reporte erros ou tire suas dúvidas.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Endereço</h3>
              <address >Av. Prefeito Francisco Lummertz Júnior, 930 - CEP 88960-000 - Sombrio/SC</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefones</h3>
              <p><a href="tel:(48) 3533-4001">(48) 3533-4001</a> - <a href="tel:(48) 3533-2712">(48) 3533-2712</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">beat.sombrio.ifc@hotmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="contactForm2.php" method="post" role="form" class="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control txtA" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
          </form>
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
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Equipe</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Entrar</a></li>
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
