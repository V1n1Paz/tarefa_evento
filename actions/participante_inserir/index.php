<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participante :: Cadastrar</title>

    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <br>
    <?php

    $cpf = $_POST["txtCpf"];
    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $tipoIngresso = $_POST["txtTipoIngresso"];
    $dataInscricao = $_POST["txtDataInscricao"];
    $idPalestra = $_POST["txtIdPalestra"];

    // Prepara a instrução SQL
    // Os '?' são parâmetros para os dados
    $sql = "INSERT INTO participante 
    (cpf_participante, nome, email, tipo_ingresso, data_inscricao, id_palestra) 
    VALUES (?, ?, ?, ?, ?, ?)";

    // Prepara o comando
    $comando = $conexao->prepare($sql);

    // Vincula os parâmetros à instrução
    // 's' string, 'i' integer
    $comando->bind_param("sssssi",
        $cpf,
        $nome,
        $email,
        $tipoIngresso,
        $dataInscricao,
        $idPalestra
    );

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Novo participante cadastrado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao cadastrar o participante.</h1>";
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>
