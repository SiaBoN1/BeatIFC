<?php

	$conexao = mysqli_connect("localhost","root","","radioifc");
    if( !$conexao ){
    	echo "Ops.. Erro na conexão.";
    	exit;
  	}

	$pesquisa = $_POST['pesquisa'];
    $sql = "SELECT * FROM musica WHERE nome OR autor LIKE '%$pesquisa%'";
    $consulta = mysqli_query($conexao, $sql)or die(mysqli_error);

	if ($consulta->num_rows > 0){
		while ($dados = mysqli_fetch_array($consulta)) {
			echo $dados['nome']. " - ".$dados['autor']."<br>";
		}
	} else {
		$sql = "SELECT * FROM genero WHERE descricao LIKE '%$pesquisa%'";
	    $consulta = mysqli_query($conexao, $sql)or die(mysqli_error);
	    if ($consulta->num_rows > 0){
			$genero = $dados['codGenero'];
		}
		$sql2 = "SELECT * FROM musica WHERE genero =".$genero;
	    $consulta2 = mysqli_query($conexao, $sql2)or die(mysqli_error);
	    if ($consulta->num_rows > 0){
			while ($dados2 = mysqli_fetch_array($consulta2)) {
				echo $dados2['nome']. " - ".$dados2['autor']."<br>";	
			}
		}	
	}

?>