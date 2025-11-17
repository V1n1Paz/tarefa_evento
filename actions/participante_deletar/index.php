<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participante :: Deletar</title>

    <?php
    include "../../referencias.php";
        ?>
</head>

<body>
    <br>
    <?php

    $id = $_POST["txtId"];

   
    // Prepara a instrução SQL
    // Os '?' são parametros para os dados
    $sql = "DELETE FROM participante WHERE id_participante = ?";

    // Prepara o comando
    $comando = $conexao->prepare($sql);


     // Vincula o parâmetro à instrução
    // 'i' significa integer, pois o ID é um número inteiro
    $comando->bind_param("i", $id);

    
    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Participante excluído com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao remover o Participante.</h1>"; 
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>