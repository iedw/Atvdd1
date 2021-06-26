<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão Revisão 1</title>
    <link href="style.css" rel="stylesheet">
</head>
<?php session_start(); ?>
<br>
    <p>Nome: <?php echo $_SESSION['nome']; ?></p>
    <p>Telefone: <?php echo $_SESSION['tel']; ?></p></br>

    <p>Usuários do banco: </p>
    <?php

        $userbd = "root";
        $senha = "";
        $host = "localhost:33066";
        $banco = "teste";

        $connection = new mysqli($host, $userbd, $senha, $banco);

        if (mysqli_connect_errno()){
            echo "Não foi possível conectar";
        } else {
            $sql = "select * FROM USUARIO;";
            $resultado = $connection->query($sql);
            foreach ($resultado as $usuar){
                echo "Usuario: ".$usuar['Nome'];
                echo "</br>Telefone: ".$usuar['Telefone']."</br></br>";
            }
        }

    ?>
</body>
</html>
