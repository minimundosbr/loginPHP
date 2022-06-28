<?php
    session_start();
    include('conexao.php');

    $titulo_tf = $_POST['titulo_tf'];
    $descricao_tf = $_POST['descricao_tf'];
    $data_tf = $_POST['data_tf'];
    $classificacao_tf = $_POST['classificacao_tf'];
    $concluido_tf = 'n';
    $id = $_SESSION['usuario']['id'];


    $sql = 'INSERT INTO `tb_tarefas` (`id_tf`, `titulo_tf`, `descricao_tf`, `data_tf`, `concluida_tf`, `classificacao_tf`, `id_us`)';
    $sql .= "VALUES (NULL, '$titulo_tf', '$descricao_tf', '$data_tf', '$concluido_tf', '$classificacao_tf', '$id');";

    $novo = $con->query($sql);
    if($con->affected_rows>0){
        header('Location: menu.php');
    }

?>

