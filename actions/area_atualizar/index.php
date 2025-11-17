<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área temática :: Atualizar</title>

    <?php
    include "../../referencias.php";
        ?>
</head>

<body>
    <br>
    <?php

    $id = $_POST["txtId"];
    $nome = $_POST["txtNome"];


    // Prepara a instrução SQL
    // Os '?' são parametros para os dados
    $sql = "UPDATE area_tematica SET nome_area = ? WHERE id_area = ?";

    // Prepara o comando
    $comando = $conexao->prepare($sql);


    // Vincula os parâmetros à instrução
    // 's' significa string, 'i' significa integer, 'd' significa double
    // O número de 's's deve corresponder ao número de '?'s
    $comando->bind_param("si", $nome, $id);

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Palestrante editado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao editar o palestrante:</h1> ";
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>