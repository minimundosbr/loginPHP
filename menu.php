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
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<nav>
    <button>
        <a href="formTarefa.php">Adicionar Tarefa</a>
    </button>
    <button>
        <a href="logout.php">Logout</a>
    </button>
</nav>
<body>
    <h1>Bem vindo(a), <?php echo($nome) ?></h1>
    <table>
        <tr> <!-- Nova Linha -->
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Classificação</th>
            <th>Concluida</th>
        </tr>

        <?php
            $sql = "SELECT * FROM tb_tarefas WHERE id_us = '$id'";
            $resultado_query = $con->query($sql);
            if($con->affected_rows > 0 ){
                
                while($tarefas =  mysqli_fetch_array($resultado_query)){
                    echo("<tr>");

                        echo("<td>".$tarefas['titulo_tf']."</td>");
                        echo("<td>".$tarefas['descricao_tf']."</td>");
                        echo("<td>".$tarefas['data_tf']."</td>");
                        echo("<td>".$tarefas['classificacao_tf']."</td>");
                        echo("<td>".$tarefas['concluida_tf']."</td>");
                        echo("<td><a href=deletaTarefa.php?id_tf=".$tarefas['id_tf'].">Excluir</a></td>");

                    echo("</tr>");
                }
            }
        ?>
    </table>
    
</body>
</html>