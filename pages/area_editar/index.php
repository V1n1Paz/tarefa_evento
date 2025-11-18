<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área temática :: Editar</title>
    <link rel="stylesheet" href="../../style.css">
    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <br>
    <?php

    $nome = "";
    $formacao = "";
    $empresa = "";
    $email = "";
    $bio = "";

    // O ID do registro que você quer buscar
    $id = $_POST["txtId"]; // Por exemplo, buscar o usuário com ID 5
    
    // Prepara a instrução SQL com um placeholder '?'
    $sql = "SELECT * FROM area_tematica WHERE id_area = ?";

    // Prepara o statement
    $comando = $conexao->prepare($sql);

    // Vincula o parâmetro à instrução
    // 'i' significa integer, pois o ID é um número inteiro
    $comando->bind_param("i", $id);

    // Executa o statement
    $comando->execute();

    // Pega o resultado da consulta
    $resultado = $comando->get_result();

    // Verifica se encontrou o registro
    if ($resultado->num_rows > 0) {
        // Pega o registro (array associativo)
        $registro = $resultado->fetch_assoc();

        $nome = $registro["nome_area"];


    } else {
        echo "Nenhum registro encontrado com o ID fornecido.";
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>


    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Área temática :: Editar</h2>
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" required="" placeholder="Id do palestrante" name="txtId"
                            value="<?php echo $id ?>">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" required="" placeholder="Nome do palestrante"
                            name="txtNome" value="<?php echo $nome ?>">
                    </div>


                    <br>
                    <div class="form-group">

                        <button type="submit" class="btn btn-primary" name="btEditar"
                            formaction="../../actions/area_atualizar/index.php">
                            Editar
                        </button>

                        <button type="submit" class="btn btn-warning" name="btExcluir"
                            formaction="../../actions/area_deletar/index.php">
                            Excluir
                        </button>


                        <a href="../../index.php">

                            <button type="button">
                                Voltar
                            </button>

                        </a>

                    </div>

                </div>
            </div>
        </div>
    </form>

</body>

</html>