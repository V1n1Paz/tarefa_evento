<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestra :: Atualizar</title>

    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <br>

    <?php

    $id = $_POST["txtId"];
    $titulo = $_POST["txtTitulo"];
    $descricao = $_POST["txtDescricao"];
    $horaInicio = $_POST["txtHoraInicio"]; 
    $duracao = $_POST["txtDuracao"];
    $idPalestrante = $_POST["txtIdPalestrante"];
    $idArea = $_POST["txtIdArea"];

    // Prepara a instrução SQL
    $sql = "UPDATE palestra 
            SET titulo = ?, descricao = ?, horario_inicio = ?, duracao_minutos = ?, 
                id_palestrante = ?, id_area = ?
            WHERE id_palestra = ?";

    // Prepara o comando
    $comando = $conexao->prepare($sql);

    // Vincula os parâmetros
    $comando->bind_param(
        "sssiiii",
        $titulo,
        $descricao,
        $horaInicio,
        $duracao,
        $idPalestrante,
        $idArea,
        $id
    );

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Palestra editada com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao editar a palestra:</h1>";
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();

    ?>

</body>

</html>
