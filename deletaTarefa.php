<?php
    session_start();
    include('conexao.php');
    $id_tf = $_GET['id_tf'];

    $sql = "DELETE FROM tb_tarefas WHERE id_tf = $id_tf;";
    $con->query($sql);
    if($con->affected_rows){
        header('Location: menu.php');
    }

?>