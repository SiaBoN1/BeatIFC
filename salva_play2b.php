<?php

include('includes/conexao.php');

$nomeMusica = $_POST['nomeCad'];
$autor = $_POST['autorCad'];
$genero = "null";

$string = "INSERT INTO play2b (nomeMusica, autor, genero) VALUES ('$nomeMusica', '$autor', '$genero');";
	header('Location:2b.php');
$inserir = mysqli_query($conexao, $string);

?>