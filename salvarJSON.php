<?php

require("conecta.php");
//require_once("conecta.php");
//include("conecta.php");
//include_once("conecta.php");  

if ($_SERVER['HTTP_METHOD'] === 'POST') {
    //Criar variável para INSERT
    extract($_POST);

    //Criar uma variavel de string e resulta em sql
    $sqlInsert = "INSERT INTO tb_usuario(nome_us, email_us) VALUES('$txtNome','$txtEmail')";

    $resposta = mysqli_query($conexao, $sqlInsert);

    if ($resposta) {
        echo 'Registro salvo com id: ' . mysqli_insert_id($conexao);
    } else {
        echo mysqli_connect_error();
    }
}
