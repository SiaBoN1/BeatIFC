<?php
session_start();

	if ( !isset ($_SESSION['login'])){
		echo "Não Existe Sessão";
		header('location:index.php');
		exit;
	}else{
		if ($_SESSION['login'] != 'sim'){
			echo "Não está Logado";
			header('location:index.php');
			exit;
		}
	}
?>