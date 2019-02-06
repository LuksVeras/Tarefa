<?php

    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];
    $password = $_POST['senha'];

    $sql = "insert into usuarios (nome, email, profissao, senha) values ('$nome', '$email', '$profissao', '$password')";
    $save = mysqli_query($conexao, $sql);

    $linhas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);
 ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Site - Login</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
<div class="container">
    <nav>
        <ul class="menu">
            <a href="index.html"><li>Cadastro</li></a>
            <a href="login.html"><li>Login</li></a>
        </ul>
    </nav>
    <section>
        <h1>Confirmação de Cadastro</h1>
        <hr><br><br>

        <?php
            if($linhas == 1){
                print "Cadastro Realizado!";
            }else{
                print "Email ja está sendo utilizado, tente outro!";
            }
        ?>


    </section>
</div>
</body>

</html>