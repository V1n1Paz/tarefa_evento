<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participante :: Atualizar</title>

    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <br>
    <?php

    $id             = $_POST["txtId"];
    $nome           = $_POST["txtNome"];
    $email          = $_POST["txtEmail"];
    $tipo           = $_POST["txtTipo"];
    $dataInscricao  = $_POST["txtInscricao"];
    $idPalestra     = $_POST["txtPalestra"];
    $cpf            = $_POST["txtCpf"];
    $dataRegistro   = $_POST["txtRegistro"];

    // Prepara a instrução SQL
    $sql = "UPDATE participante 
            SET nome = ?, email = ?, tipo_ingresso = ?, data_inscricao = ?, 
                id_palestra = ?, cpf_participante = ?, data_registro = ?
            WHERE id_participante = ?";

    // Prepara o comando
    $comando = $conexao->prepare($sql);

    // Vincula os parâmetros
    // s = string, i = inteiro
    $comando->bind_param(
        "ssssissi",
        $nome,
        $email,
        $tipo,
        $dataInscricao,
        $idPalestra,
        $cpf,
        $dataRegistro,
        $id
    );

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Participante atualizado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao atualizar o participante.</h1>";
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>
