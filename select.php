<?php
    // Conexaão com banco de dados
    require("conecta.php");

    // exibir todos os registro da tabela usuario

    $sqlSelect = "SELECT * FROM tb_usuario";

    //Executar np banco

    $respostas = mysqli_query($conexao, $sqlSelect);

    //Quantos registros tem na tabela

    echo mysqli_num_rows($respostas);

    //exibir valores da tabela
   // $campo = mysqli_fetch_assoc($respostas);

    //exibir
   // echo $campo["nome_us"];
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while($linha = mysqli_fetch_assoc($respostas)){
        echo "<tr>";
        echo "<td>".$linha['nome_us']."</td><td>".$linha['email_us']."</td>";
        #echo "<td>".$linha[1]."</td><td>".$linha[2]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";


?>