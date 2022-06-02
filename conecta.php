<?php
    //Primeira formar de conectar ao banco web
    define("servidor","127.0.0.1");
    define("usuario","root");
    define("senha","");
    define("banco","modular");

    $conexao = mysqli_connect(servidor,usuario,senha,banco);

    if(!$conexao){
        echo "Não Conectou !!!".mysqli_error();
        exit();
    }
    
?>