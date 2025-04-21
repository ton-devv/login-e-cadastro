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
<style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
  background-color: rgba(207, 239, 248, 0.75);
      padding: 70px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 80%;
      padding: 20px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    .login-container button {
      width: 70%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: white;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-container button {
  width: 50%;
  padding: 15px;
  background-color: rgb(23, 192, 214);
  border: none;
  color: white;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  display: block;
  margin: 20px auto 0;
}


    .login-container p {
      text-align: center;
      margin-top: 15px;
      color: #666;
    }

    body {
    font-family: Arial, sans-serif;
    background: url('https://images3.alphacoders.com/132/thumb-1920-1322308.jpeg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  </style>
  
  <div class="login-container">
    <h2>Acesse sua conta</h2>
    <form action="index.php" method="POST">
      <input type="text" name="email" class="inputUser" placeholder="email" required>
      <input type="password" name="senha" class="inputUser" placeholder="Senha" required>
      <button type="submit" name="btn-entrar">Entrar</button><p>
      <a href="cadastrar.php">Cadastre-se</a><p>
      
    </form>
  </div>

</body>
</html>


