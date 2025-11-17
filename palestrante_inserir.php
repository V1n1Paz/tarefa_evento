<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestrante :: Cadastrar</title>

    <?php
    include "referencias.php"
        ?>
</head>

<body>
    <br>
    <?php


    $nome = $_POST["txtNome"];
    $formacao = $_POST["txtFormacao"];
    $empresa = $_POST["txtEmpresa"];
    $email = $_POST["txtEmail"];
    $bio = $_POST["txtBio"];


    // $descricao = $_POST["txtDescricao"];
    // $data_entrega = $_POST["txtData"];
    // $prioridade = $_POST["txtPrioridade"];
    // $responsavel = $_POST["txtResponsavel"];

    // Prepara a instrução SQL
    // Os '?' são parametros para os dados
    $sql = "INSERT INTO palestrante (nome, formacao, empresa, email, bio_resumida) VALUES (?, ?, ?, ?, ?)";

    // Prepara o comando
    $comando = $conexao->prepare($sql);


    // Vincula os parâmetros à instrução
    // 's' significa string, 'i' significa integer, 'd' significa double
    // O número de 's's deve corresponder ao número de '?'s
    $comando->bind_param("sssss", $nome, $formacao, $empresa, $email, $bio);

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Novo palestrante cadastrado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao cadastrar o palestrante.</h1> "; 
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>