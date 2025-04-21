<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbSenha = '';
    $dbName = 'crud-everton';

    $mysqli = new mysqli($dbHost,$dbUsername, $dbSenha, $dbName);

    if($mysqli->error) {
        die("Falha ao conectar com o banco de dados: " . $mysqli->error);
    }

?>