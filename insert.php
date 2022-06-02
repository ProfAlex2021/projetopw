<?php

    require("conecta.php");
    //require_once("conecta.php");
    //include("conecta.php");
    //include_once("conecta.php");  

    //Criar variável para INSERT
    $nome = "Cae";
    $email = "cae@gmail.com";
    //Criar uma variavel de string e resulta em sql
    $sqlInsert = "INSERT INTO tb_usuario(nome_us, email_us) VALUES('$nome','$email')";
    #$sqlInsert = "INSERT INTO tb_usuario VALUES(NULL,'Vitor','vitor@gmail.com'),(NULL,'Abner','abner@gmail.com')";

    $resposta = mysqli_query($conexao,$sqlInsert);

    if($resposta){
        echo "Cadastro feito com sucesso";
        mysqli_close($conexao);
    }
    else{
        echo mysqli_connect_error();
    }
?>