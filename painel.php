<?php
include_once('protecao.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Funcionando</title>
</head>
<body>
    <h1>SEJA BEM VINDO, <?php echo $_SESSION['nome']. "!" ; ?></h1>
    <p>
    <a href="sair.php">Sair</a>
    </p>
</body>
</html>