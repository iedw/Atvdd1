<?php

    session_start();
    $nome = $_GET['nome'];
    $tel = $_GET['tel'];

    $_SESSION['nome'] = $nome;
    $_SESSION['tel'] = $tel;

    session_write_close();

    $userbd = "root";
    $senha = "";
    $host = "localhost:33066";
    $banco = "teste";

    $connection = new mysqli($host, $userbd, $senha, $banco);

    if (mysqli_connect_errno()){
        echo "Não foi possível conectar";
    } else {
        $sql = "insert into USUARIO (nome, telefone) values ('$nome', '$tel')";
        if ($connection->query($sql)) {
            echo 'Cadastrado';
        } else {
            echo 'Erro ' . $sql . ' ' . $connection->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão Revisão 1</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <p>Dados recebidos</p>
    <a href="exibir.php">Exibir</a>
</body>
</html>
