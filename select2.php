<?php
    require("conecta.php");

    $sqlSelect = "SELECT * FROM tb_usuario";
    $respostas = mysqli_query($conexao, $sqlSelect);
?>
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
<?php while($linha = mysqli_fetch_assoc($respostas)){?>
        <tr>
            <td><?php echo $linha['nome_us']?></td>
            <td><?php echo $linha['email_us']?></td>
        </tr>
<?php }?>
    </tbody>
  </table>