<?php

    session_start();
    include('conexao.php');
    $email = $_POST['email_us']; 
    $senha = $_POST['senha_us'];
    
    if(isset($email) && isset($senha)){

        $sql = "SELECT * FROM tb_usuarios WHERE email_us = '$email' AND senha_us = '$senha';";

        $resultado_query = $con->query($sql);

        if($con->affected_rows>0){

            $dados = mysqli_fetch_array($resultado_query);

            $_SESSION['usuario']['id'] = $dados['id_us'];
            $_SESSION['usuario']['nome'] = $dados['nome_us'];
            $_SESSION['usuario']['sobrenome'] = $dados['sobrenome_us'];
            $_SESSION['usuario']['email'] = $dados['email_us'];

            header('Location: menu.php');
        }else{
            echo('não encontrado');
        }
    }
?>