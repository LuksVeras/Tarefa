<?php
    include_once("conexao.php");

    $sql = "select * from usuarios";
    $login = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($login);

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
            <a href="login.php"><li>Login</li></a>
        </ul>
    </nav>
    <section>
        <h1>Login</h1>
        <hr><br><br>

        <form method="post" action="dados.php">
            <input type="submit" value="Logar" class="btn">
            <input type="reset" value="Limpar" class="btn">
            <br><br>

            Email<br>
            <input type="email" name="email" class="campo" maxlength="45" required placeholder="EX: SeuEmail@email.com"><br>
            Senha<br>
            <input type="password" name="senha" class="campo" maxlength="20" required><br>
        </form>
    </section>
</div>
</body>

</html>