<?php

require_once 'conexao.php';

if (isset($_POST['btn-cadastrar'])) {
    $email = $mysqli-> real_escape_string($_POST['email']);
    $senha = $mysqli-> real_escape_string($_POST['senha']);
    $nome = $mysqli-> real_escape_string($_POST['nome']);
}

    $sql_cadastro = "INSERT INTO usuarios (nome,senha,email) VALUES ('$nome', '$senha', '$email')";
    
    if(mysqli_query($mysqli, $sql_cadastro)) {
        header('Location: index.php?sucesso');
    } else {
        header('Location: index.php?erro');
    }



?>