<?php

include('includes/conexao.php');

$usuario = $_POST['usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$confSenha = $_POST['confSenha'];
$curso = $_POST['curso'];
$turma = $_POST['turma'];
$avatar = $_FILES['avatar'];
$bio = "Adicionar uma bio.";
$erro_upload=0;


if ($senha != $confSenha) {
 	echo "<script> alert('Senhas não correspondentes, volte e reescreva as senhas.')</script>";
	exit;
}

 if ( $avatar['error'] != 0 ){ 
 echo "Erro no UPLOAD da avatar. <br>"; $erro_upload=1; }

 if ( $avatar['size'] == 0 ){ 
 echo "Erro no arquivo, tamanho = 0. <br>"; 
 $erro_upload=1; }

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


if ( $resposta=move_uploaded_file($avatar['tmp_name'],$destino)) {  // gravando no diretorio

$string= "INSERT INTO usuario (usuario, nome, matricula, email, senha, turma, curso, avatar, bio) VALUES ('$usuario', '$nome', '$matricula', '$email', '$senha', $turma, $curso, '$destino', '$bio');";
    echo "<script>alert('Usuário Cadastrado com Sucesso!');</script>";

$inserir = mysqli_query($conexao, $string);


}
header('Location: login.php')

?>