<?php

include('includes/conexao.php');

$nomeMusica = $_POST['nomeCad'];
$autor = $_POST['autorCad'];
$genero = "null";

$string = "INSERT INTO play2a (nomeMusica, autor, genero) VALUES ('$nomeMusica', '$autor', '$genero');";
	header('Location:2a.php');
$inserir = mysqli_query($conexao, $string);

?>