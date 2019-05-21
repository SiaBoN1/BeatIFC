<?php
  include('includes/conexao.php');
  include('includes/verifica.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Beat IFC - Editar Perfil</title>
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
          <li><a href="#cadastro">Perfil</a></li>
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
                <h2>Faça login e junte-se ao Beat IFC</h2>
                <p>Através do Beat IFC você tem acesso a diversas músicas e pode compartilhar com seus colegas e amigos. Recomende músicas, descubra novos estilos e faça parte da maior comunidade musical do Instituto Federal Catarinense - Campus Avançado Sombrio</p>
                <a href="#login" class="btn-get-started scrollto">Iniciar Sessão</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Crie sua conta e divirta-se</h2>
                <p>Cadastre-se no site e junte-se a comunidade musical do IFC. Tenha acesso a músicas, playlists e muito mais.</p>
                <a href="#cadastro" class="btn-get-started scrollto">Cadastrar-se</a>
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

    <section id="cadastro" class="section-bg wow fadeInUp">
      <section id="contact" class="section-bg wow fadeInUp">
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
                  $twitter = $dados['twitter'];
                  $matricula = $dados['matricula'];
                  $avatar = $dados['avatar'];
                  $facebook = $dados['facebook'];
                  $instagram = $dados['instagram'];
                  $curso = $dados['curso'];
                  $senha = $dados['senha'];
                  $cursoCompleto = '';
                  if ($dados['curso'] == 1) {
                      $curso = "Informática";
                      $cursoN = "1";
                      $cursoCompleto = "Técnico Integrado em Informática";
                  } else if ($dados['curso'] == 2){
                      $curso = "Hospedagem"; 
                      $cursoN = "2";
                      $cursoCompleto = "Técnico Integrado em Hospedagem";                   
                  }

                  $turma = $dados['turma'];

                if ($dados['turma'] == 1) {
                    $turma = "1° Ano A";
                    $siteTurma = "1a";
                    $turmaN = "1";
                } else if ($dados['turma'] == 2){
                    $turma = "1° Ano B";
                    $siteTurma = "1b";
                    $turmaN = "2";
                } else if ($dados['turma'] == 3){
                    $turma = "1° Ano H";
                    $siteTurma = "1h";
                    $turmaN = "3";
                } else if ($dados['turma'] == 4){
                    $turma = "2° Ano A";
                    $siteTurma = "2a";
                    $turmaN = "4";
                } else if ($dados['turma'] == 5){
                    $turma = "2° Ano B"; 
                    $siteTurma = "2b";
                    $turmaN = "5";
                } else if ($dados['turma'] == 6){
                    $turma = "2° Ano H";
                    $siteTurma = "2h";
                    $turmaN = "6";
                } else if ($dados['turma'] == 7){
                    $turma = "3° Ano A";
                    $siteTurma = "3a";
                    $turmaN = "7";
                } else if ($dados['turma'] == 8){
                    $turma = "3° Ano B";
                    $siteTurma = "3b";
                    $turmaN = "8";
                } else {
                    $turma = "3° Ano H";  
                    $siteTurma = "3h";  
                    $turmaN = "9";               
                }
              }
        ?>

        <div class="section-header">
          <h3>Editar Perfil</h3>
          <center><img src="<?php echo $avatar ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></center><br>
        </div>

        <div class="form">
          <form enctype="multipart/form-data" action="edita_usuario.php" method="post" role="form" class="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="usuario" class="form-control" id="name" value="<?php echo $usuario ?>" data-rule="minlen:4" data-msg=" Insira no mínimo 4 letras" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>" data-rule="email" data-msg="Por favor insira um Email válido" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="password" class="form-control" name="senha" id="email" value="<?php echo $senha ?>" data-rule="minlen:8" data-msg="Por favor insira ao menos 8 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="password" name="confSenha" class="form-control" id="name" value="<?php echo $senha ?>" data-rule="minlen:8" data-msg="Confirme a senha" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="nome" class="form-control" id="name" value="<?php echo $nome ?>" data-rule="minlen:4" data-msg=" Insira no mínimo 4 letras" />
                <div class="validation"></div>
              </div>
               <div class="form-group col-md-6">
                <input type="number" name="matricula" class="form-control" id="name" value="<?php echo $matricula ?>" data-rule="minlen:10" data-msg=" Insira os 10 números de matrícula" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <?php 
                  if( $cursoN == "1"){
                    echo "<select name='curso'>
                            <option>Curso</option>
                            <option selected='selected' value='1'>Técnico em Informática Integrado ao Ensino Médio</option>
                            <option value='2'>Técnico em Hospedagem Integrado ao Ensino Médio</option>
                        </select>
                <div class='validation'></div>";
              } else if ( $cursoN == "2") {
                  echo "
                <select name='curso'>
                            <option>Curso</option>
                            <option value='1'>Técnico em Informática Integrado ao Ensino Médio</option>
                            <option selected='selected' value='2'>Técnico em Hospedagem Integrado ao Ensino Médio</option>
                        </select>
                <div class='validation'></div>";
              }
                ?>
              </div>
              <div class="form-group col-md-6">

                <?php 
                  if( $turmaN == '1'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option selected='selected' value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if( $turmaN == '2'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option selected='selected' value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '3'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option selected='selected' value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '4'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option selected='selected' value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '5'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option selected='selected' value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '6'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option selected='selected' value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '7'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option selected='selected' value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '8'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option selected='selected' value='8'>3° Ano B (Informática)</option>
                                <option value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";} else if ( $turmaN == '9'){
                    echo "

                <select name='turma'>
                                <option>Turma</option>
                                <option value='1'>1° Ano A (Informática)</option>
                                <option value='2'>1° Ano B (Informática)</option>
                                <option value='3'>1° Ano H (Hospedagem)</option>
                                <option value='4'>2° Ano A (Informática)</option>
                                <option value='5'>2° Ano B (Informática)</option>
                                <option value='6'>2° Ano H (Hospedagem)</option>
                                <option value='7'>3° Ano A (Informática)</option>
                                <option value='8'>3° Ano B (Informática)</option>
                                <option selected='selected' value='9'>3° Ano H (Hospedagem)</option>
                            </select>
                <div class='validation'></div>
                ";}
                ?>
              </div>

              <div class="form-group col-md-12">
                <textarea name="bio" class="form-control" style="  resize: none;" maxlength="200" id="name" placeholder="Bio (máximo 200 caracteres)." value="<?php echo $bio ?>" data-rule="maxlen:200" data-msg=" Insira no máximo 200 caracteres."><?php echo $bio ?></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <input type="text" name="twitter" class="form-control" id="name" placeholder="Perfil Twitter (Link)" value="<?php echo $twitter ?>" data-rule="minlen:4" data-msg=" Insira no mínimo 4 letras" />
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <input type="text" name="facebook" class="form-control" id="name" value="<?php echo $facebook ?> " placeholder="Perfil Facebook (Link)" data-rule="minlen:4" data-msg=" Insira no mínimo 4 letras" />
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <input type="text" name="instagram" class="form-control" id="name" value="<?php echo $instagram ?> " placeholder="Perfil Instagram (Link)" data-rule="minlen:4" data-msg=" Insira no mínimo 4 letras" />
                <div class="validation"></div>
              </div>

              <div class="text-center"><label>Selecione seu Avatar: </label><input class="avatar" value="<?php echo $avatar ?>" type="file" name="avatar" placeholder="Avatar" /></div>
            </div>
            <div class="text-center"><input name="btnCadastro" type="submit" value="Confirmar" id="cadastro"></div>
          </form>
        </div>

      </div>
    </section>
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

        <?php
            } else {
              echo "Nenhum dado encontrado";
            }
          ?> 

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
            <h4>Links Adicionais</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.html">Início</a></li>
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
              <strong>Email:</strong> beat.ifc@hotmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://soundcloud.com/zombie-nerdcraft" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Nossa Carta</h4>
            <p class="text-final">A ideia de desenvolver um ambiente musical no IFC foi levantada pelos desenvolvedores, orientados pelos professores, e deu início à plataforma Beat IFC, onde os alunos e servidores podem apreciar a música enquanto executam suas atividades escolares.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Inscreva-se">
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
