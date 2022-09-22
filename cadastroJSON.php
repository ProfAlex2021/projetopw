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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="cadastroJSON.js"></script>
</head>
<body>
  <div class="container min-vh-100" style="background-color: #f00">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Página inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lista.php">Lista</a>
        </li>
        <li class="nav-item">
  <?php if(isset($_SESSION['usuario'])){?>
          <a class="nav-link active" href="cadastro.php">Cadastro</a>
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
    <div class="row">.
        <div class="col">
            <h1>Cadastro</h1>
            <form action="salvarJSON.php" method="POST">
              <div>
                <label for="txtNome" class="form-label">Nome:</label>
                <input type="text" name="txtNome" id="txtNome" placeholder="Nome" class="form-control" required />
              </div>
              <div>
                <label for="txtEmail" class="form-label">Email:</label>
                <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" class="form-control" required />
              </div>
              <div>
                <input type="submit" value="Salvar" class="btn btn-primary" />
              </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>