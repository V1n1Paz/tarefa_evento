<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestrante :: Cadastrar</title>

    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <br>

    <?php
    $titulo = $_POST["txtTitulo"];
    $descricao = $_POST["txtDescricao"];
    $horaInicio = $_POST["txtHoraInicio"];  // datetime (string)
    $duracao = $_POST["txtDuracao"];        // inteiro (minutos)
    $idPalestrante = $_POST["txtIdPalestrante"];
    $idArea = $_POST["txtIdArea"];

    // SQL
    $sql = "INSERT INTO palestra 
        (titulo, descricao, horario_inicio, duracao_minutos, id_palestrante, id_area)
        VALUES (?, ?, ?, ?, ?, ?)";

    // Prepara
    $comando = $conexao->prepare($sql);

    // Bind
    $comando->bind_param(
        "sssiii",
        $titulo,
        $descricao,
        $horaInicio,  // string (datetime)
        $duracao,     // int
        $idPalestrante,
        $idArea
    );

    // Executa
    $comando->execute();

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Nova palestra marcada com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao marcar a palestra.</h1> ";
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>