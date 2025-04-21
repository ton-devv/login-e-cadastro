<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>CRUD BY EVERTON</title>
</head>
<body>
  <div class="login-container">
    <h2>Criar uma conta</h2>
    <form action="cliente.php" method="POST">
        <input type="text" name="nome" class="inputUser" placeholder="nome" required><p>
        <input type="text" name="email" class="inputUser" placeholder="email" required><p>
        <input type="password" name="senha" class="inputUser" placeholder="Senha" required><p>
        <button type="submit" name="btn-cadastrar">Fazer cadastro</button><p>
        <a href="index.php">Voltar</a>
    </form>
  </div>
</body>
</html>