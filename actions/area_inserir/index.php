<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área temática :: Inserir</title>

    <?php
    include "../../referencias.php";
        ?>
</head>

<body>
    <br>
    <?php


    $nome = $_POST["txtNome"];


    // Prepara a instrução SQL
    // Os '?' são parametros para os dados
    $sql = "INSERT INTO area_tematica (nome_area) VALUE (?)";

    // Prepara o comando
    $comando = $conexao->prepare($sql);


    // Vincula os parâmetros à instrução
    // 's' significa string, 'i' significa integer, 'd' significa double
    // O número de 's's deve corresponder ao número de '?'s
    $comando->bind_param("s", $nome);

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Nova área adicionada com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao adicionar a área.</h1> "; 
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>