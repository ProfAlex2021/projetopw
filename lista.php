<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PW - Página incial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="confirmar.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Página inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="lista.php">Lista</a>
        </li>
        <li class="nav-item">
  <?php if(isset($_SESSION['usuario'])){?>
          <a class="nav-link" href="cadastro.php">Cadastro</a>
  <?php } else { ?>
          <a class="nav-link disabled" href="cadastro.php">Cadastro</a>
  <?php } ?>
        </li>
      </ul>
  <?php if(isset($_SESSION['usuario'])){?>
      <form action="logout.php" class="d-flex">
        <input type="submit" value="Sair" class="btn btn-outline-info" />
      </form>
  <?php } else { ?>
      <form action="login.php" class="d-flex">
        <input type="submit" value="Entrar" class="btn btn-outline-info" />
      </form>
  <?php } ?>
    </div>
  </nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de usuários</h1>
            <?php require("select2.php") ?>
        </div>
    </div>
</div>
</body>
</html>