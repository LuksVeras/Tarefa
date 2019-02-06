<?php

    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "cadastro";
    $conexao = mysqli_connect($hostname, $usuario, $senha, $database);

    if(!$conexao){
        print("Conexão com o banco falhou!");
    }

?>