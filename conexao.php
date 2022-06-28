<?php
    $servidor = 'localhost';
    $banco = 'db_todo';
    $usuario = 'root';
    $senha = '';

    $con = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$con){
        echo "Não Conectou !!!".mysqli_error();
        exit();
    }
    
?>



<!-- 

    Toda conexão de banco de dados tem: servidor, banco, usuario, senha
-->