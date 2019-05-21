<?php

include('includes/conexao.php');
include('includes/verifica.php');

$sql = "SELECT * FROM usuario WHERE codUsuario= " .$_SESSION['usuario'];
$consulta = mysqli_query($conexao, $sql)or die(mysqli_error);
	$dados = mysqli_fetch_assoc($consulta);
	$avatarP = $dados['avatar'];

$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$confSenha = $_POST['confSenha'];
$curso = $_POST['curso'];
$turma = $_POST['turma'];
$avatar = $_FILES['avatar'];
$bio = $_POST['bio'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$erro_upload=0;


if ($senha != $confSenha) {
    echo "<script> alert('Senhas não correspondentes, volte e reescreva as senhas.')</script>";
    exit;
}

if ($avatar['size'] == 0) {
	$destino = $avatarP;
	$string = "UPDATE usuario SET usuario='$usuario', nome='$nome', email='$email', matricula=$matricula, senha='$senha', curso='$curso', turma='$turma', avatar='$destino', bio='$bio', twitter='$twitter', facebook='$facebook', instagram='$instagram' WHERE codUsuario =".$_SESSION['usuario'];
    header('Location:central.php');
    $inserir = mysqli_query($conexao, $string);

} else{

 if ( $avatar['size'] > 1000000 ){ 
 echo "Tamanho maior que 10000000 bytes (10Mbyte)  <br>"; 
 $erro_upload=1; } 

 if ( ( $avatar['type'] != "image/gif" ) &&
 ( $avatar['type'] != "image/jpeg" ) &&
 ( $avatar['type'] != "image/jpg" ) &&
 ( $avatar['type'] != "image/pjpeg" ) &&
 ( $avatar['type'] != "image/x-png" )) {
 echo "Erro no TIPO de arquivo, nao aceito <br>";
 $erro_upload=1;
}


 $nome_final = time();
 $destino = "img/prof/";
 $destino = $destino.$nome_final.$extensao;
}

if ( $resposta=move_uploaded_file($avatar['tmp_name'],$destino)) {
$string = "UPDATE usuario SET usuario='$usuario', nome='$nome', email='$email', matricula=$matricula, senha='$senha', curso='$curso', turma='$turma', avatar='$destino', bio='$bio', twitter='$twitter', facebook='$facebook', instagram='$instagram' WHERE codUsuario =".$_SESSION['usuario'];
    header('Location:central.php');

$inserir = mysqli_query($conexao, $string);
}


?>