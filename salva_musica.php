<?php

include('_includes/conexao.php');

$nomeMusica = $_POST['nomeMusica'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$duracao = $_POST['duracao'];
$varDescricao = $_POST['descricao'];
$link = $_POST['link'];

$string = "INSERT INTO musica (nome, autor, duracao, genero, descricao, link) VALUES ('$nomeMusica', '$autor', '$duracao', $genero, '$varDescricao', '$link');";
    header('Location:centralMusica.php');

$inserir = mysqli_query($conexao, $string);

?>