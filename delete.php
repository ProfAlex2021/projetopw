<?php

    require("conecta.php");

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }else{
        echo "Informe o id do usuário para ser apagado";
        echo "Exemplo: ";
        $link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id=3';
        echo '<a href="' . $link .'">' . $link . '</a>';
        exit();
    }
    $sqlDelete = "DELETE FROM tb_usuario WHERE id_us = $id";

    $resposta = mysqli_query($conexao,$sqlDelete);


?>