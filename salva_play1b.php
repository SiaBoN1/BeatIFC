<?php

include('includes/conexao.php');

$nomeMusica = $_POST['nomeCad'];
$autor = $_POST['autorCad'];
$genero = "null";

$string = "INSERT INTO play1b (nomeMusica, autor, genero) VALUES ('$nomeMusica', '$autor', '$genero');";
	header('Location:1b.php');
$inserir = mysqli_query($conexao, $string);

?>