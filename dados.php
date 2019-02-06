<?php
    include_once("conexao.php");

    $sql = "select * from usuarios";
    $login = mysqli_query($conexao, $sql);
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
            <a href="login.php"><li>Logout</li></a>
        </ul>
    </nav>
    <section>
        <h1>Dados</h1>
        <hr><br><br>
        <?php
            while($exibirReg = mysqli_fetch_array($login)){
                $codigo = $exibirReg[0];
                $nome = $exibirReg[1];
                $email = $exibirReg[2];
                $profissao = $exibirReg[3];

                print "<article>";

                print"ID: $codigo<br>";
                print "Nome: $nome<br>";
                print "Email: $email<br>";
                print "Profissão: $profissao<br>";

                print "</article>";
            }

            mysqli_close($conexao);
        ?>
    </section>
</div>
</body>

</html>
