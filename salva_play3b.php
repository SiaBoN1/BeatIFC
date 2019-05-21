<?php

include('includes/conexao.php');

$nomeMusica = $_POST['nomeCad'];
$autor = $_POST['autorCad'];
$genero = "null";

$string = "INSERT INTO play3b (nomeMusica, autor, genero) VALUES ('$nomeMusica', '$autor', '$genero');";
	header('Location:3b.php');
$inserir = mysqli_query($conexao, $string);

?>