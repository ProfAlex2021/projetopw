<?php

    require("conecta.php");

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        echo "Informe o id do usuário para ser apagado";
        echo "Exemplo: ";
        $link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id=3';
        echo '<a href="' . $link .'">' . $link . '</a>';
        exit();
    }
    $sqlDelete = "DELETE FROM tb_usuario WHERE id_us = $id";

    $resposta = mysqli_query($conexao,$sqlDelete);
    header("Location: lista.php");

?>