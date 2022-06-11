<?php
    session_start();

    if(isset($_REQUEST['txtNome']) == false){
        if(!isset($_SESSION['usuario'])){
            header("Location: login.php");
        }else{
            exit();
        }
    }

    if($_REQUEST['txtNome'] == "admin" && $_REQUEST['txtSenha'] == "nimda"){
        $_SESSION['usuario'] = "Adminstrador";
        header("Location: index.php");
    }