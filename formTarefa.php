<?php
    session_start();
    include('conexao.php');
    $id = $_SESSION['usuario']['id'];
    $nome = $_SESSION['usuario']['nome'];
    $sobremone = $_SESSION['usuario']['sobrenome'];
    $email = $_SESSION['usuario']['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="processaTarefa.php" method="POST">
        <label for="titulo_tf">Titulo Tarefa</label>
        <div class="cxInput">
            <input type="text" name="titulo_tf" id="titulo_tf">
        </div>

        <label for="descricao_tf">Descrição Tarefa</label>
        <div class="cxInput">
            <textarea name="descricao_tf" id="descricao_tf" cols="50" rows="10" ></textarea>
        </div>

        <label for="data_tf">Data tarefa</label>
        <div class="cxInput">
            <input type="date" name="data_tf" id="data_tf">
        </div>

        <label for="classificacao_tf">Classificação Tarefa</label>
        <div class="cxInput">
            <input type="text" name="classificacao_tf" id="classificacao_tf">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>