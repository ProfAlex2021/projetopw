<?php

    require("conecta.php");
    //require_once("conecta.php");
    //include("conecta.php");
    //include_once("conecta.php");  

    //Criar variável para INSERT
    extract($_POST);


    //Criar uma variavel de string e resulta em sql
    $sqlInsert = "INSERT INTO tb_usuario(nome_us, email_us) VALUES('$txtNome','$txtEmail')";
    #$sqlInsert = "INSERT INTO tb_usuario VALUES(NULL,'Vitor','vitor@gmail.com'),(NULL,'Abner','abner@gmail.com')";

    $resposta = mysqli_query($conexao,$sqlInsert);

    if($resposta){
        header("Location: lista.php");
    }
    else{
        echo mysqli_connect_error();
    }
?>