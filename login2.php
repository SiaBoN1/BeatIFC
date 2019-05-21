<?php

session_start();
    require_once('includes/conexao.php');

/* login em php (comparação) */

//Determina que quando precionado o elemento com id = "entrar" a linha de código abaixo será executada
    if (isset($_POST['login'])){   
        
        $usuario = $_POST['usuario'];    
        $senha = $_POST['senha'];  

        $selecao = "SELECT * FROM usuario WHERE usuario= '$usuario' and senha= '$senha'";

        $query = $conexao->query($selecao);
        $fetch = mysqli_fetch_array($query);
        $linha = $query->num_rows;

        if ($usuario === "adm" && $senha === "radioifccas") {
            header('Location:central.php');
        }

        else if ($linha > 0){
            
            $_SESSION['login'] ='sim';
            $_SESSION['usuario'] = $fetch['codUsuario'];
            header('Location:central.php');
        
            exit;
            
        } else {
            echo "<script>alert('Erro ao entrar. Login incorreto.')</script>";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Beat IFC - Entrar</title>
</head>

<body>
        <div class="form">
          <form action="login.php" method="POST" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="usuario" class="form-control" id="name" placeholder="Nome de Usuário" required="" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="password" class="form-control" name="senha" id="email" placeholder="Senha" required="" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="text-center"><input type="submit" name="login" id="login" value="Entrar"></div>
          </form>
        </div>

      </div>
    </section>
    </section>

</body>
</html>
