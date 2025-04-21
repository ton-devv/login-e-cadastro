<?php
  // INCLUIR O ARQUIVO DE CONEXÃO 
  include_once('conexao.php');

  // VERIFICAR SE EXISTE AS VARIAVEIS 
  if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
      echo "Preencha seu e-mail!";
    } else if(strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha!";
    } else {

      $email = $mysqli-> real_escape_string($_POST['email']);
      $senha = $mysqli-> real_escape_string($_POST['senha']);

      $sqlcode = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
      $sql_query = $mysqli->query($sqlcode) or die("Falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
           $usuario = $sql_query->fetch_assoc();
           
          if(!isset($_SESSION)) {
            session_start();
          }

          $_SESSION['id'] = $usuario['id'];
          $_SESSION['nome'] = $usuario['nome'];
          
          header("Location: painel.php");


        } else {
          echo "Falha ao logar! e-mail ou senha incorreto(a)";
        }

    }

  }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>CRUD BY EVERTON</title>
</head>
<body>
  <div class="login-container">
    <h2>Acesse sua conta</h2>
    <form action="index.php" method="POST">
      <input type="text" name="email" class="inputUser" placeholder="email" required><p>
      <input type="password" name="senha" class="inputUser" placeholder="Senha" required><p>
      <button type="submit" name="btn-entrar">Entrar</button>
      <a href="cadastrar.php">Cadastre-se</a>
      
    </form>
  </div>

</body>
</html>


