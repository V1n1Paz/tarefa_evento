<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palestrante :: Atualizar</title>

    <?php
    include "../../referencias.php";
        ?>
</head>

<body>
    <br>
    <?php

    $id = $_POST["txtId"];
    $nome = $_POST["txtNome"];
    $formacao = $_POST["txtFormacao"];
    $empresa = $_POST["txtEmpresa"];
    $email = $_POST["txtEmail"];
    $bio = $_POST["txtBio"];

    // Prepara a instrução SQL
    // Os '?' são parametros para os dados
    $sql = "UPDATE palestrante SET nome = ?, formacao = ?, empresa = ?, email = ?, bio_resumida = ? WHERE id_palestrante = ?";

    // Prepara o comando
    $comando = $conexao->prepare($sql);


    // Vincula os parâmetros à instrução
    // 's' significa string, 'i' significa integer, 'd' significa double
    // O número de 's's deve corresponder ao número de '?'s
    $comando->bind_param("sssssi", $nome, $formacao, $empresa, $email, $bio, $id);

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