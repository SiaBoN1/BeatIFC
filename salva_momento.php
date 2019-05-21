<?php

include('includes/conexao.php');

$title = $_POST['title'];
$pastaM = $_POST['pastaM'];
$data = $_POST['data'];
$turma = $_POST['turma'];
$momento = $_FILES['momento'];
$erro_upload=0;

 if ( $momento['error'] != 0 ){ 
 echo "Erro no UPLOAD do momento. <br>"; $erro_upload=1; }

 if ( $momento['size'] == 0 ){ 
 echo "Erro no arquivo, tamanho = 0. <br>"; 
 $erro_upload=1; }

 if ( $momento['size'] > 1000000 ){ 
 echo "Tamanho maior que 10000000 bytes (10Mbyte)  <br>"; 
 $erro_upload=1; } 

 if ( ( $momento['type'] != "image/gif" ) &&
 ( $momento['type'] != "image/jpeg" ) &&
 ( $momento['type'] != "image/jpg" ) &&
 ( $momento['type'] != "image/pjpeg" ) &&
 ( $momento['type'] != "image/x-png" )) {
 echo "Erro no TIPO de arquivo, nao aceito <br>";
 $erro_upload=1;
}


 $nome_final = time();
 $destino = "img/turma/".$pastaM."/";
 $destino = $destino.$nome_final.$extensao;


if ( $resposta=move_uploaded_file($momento['tmp_name'],$destino)) {  // gravando no diretorio

$string= "INSERT INTO momentos (title, codTurma, fotoMomento, data) VALUES ('$title', '$turma', '$destino', '$data');";
    echo "<script>alert('Usuário Cadastrado com Sucesso!');</script>";

$inserir = mysqli_query($conexao, $string);


}
header('Location:'.$pastaM.'.php');

?>