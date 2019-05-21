<?php

  include('includes/conexao.php');
  include('includes/verifica.php');

  session_destroy();

  header('Location:login.php');

?>