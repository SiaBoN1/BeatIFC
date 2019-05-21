<?php

include('includes/conexao.php');

$nomeMusica = $_POST['nomeCad'];
$autor = $_POST['autorCad'];
$genero = "null";

$string = "INSERT INTO play1a (nomeMusica, autor, genero) VALUES ('$nomeMusica', '$autor', '$genero');";
header('Location:1a.php');
$inserir = mysqli_query($conexao, $string);

?>