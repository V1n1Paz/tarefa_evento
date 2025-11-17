<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestra :: Editar</title>
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
    $sql = "SELECT * FROM palestra WHERE id_palestra = ?";

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

        $titulo = $registro["titulo"];
        $descricao = $registro["descricao"];
        $horaInicio = $registro["horario_inicio"];
        $duracao = $registro["duracao_minutos"];
        $idPalestrante = $registro["id_palestrante"];
        $idArea = $registro["id_area"];

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
                    <h2>Palestra :: Editar</h2>
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" required="" placeholder="Id da palestra" name="txtId"
                            value="<?php echo $id ?>">
                    </div>

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" required="" placeholder="Título da palestra"
                            name="txtTitulo" value="<?php echo $titulo ?>">
                    </div>

                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" class="form-control" required="" placeholder="Descrição da palestra"
                            name="txtDescricao" value="<?php echo $descricao ?>">
                    </div>

                    <div class="form-group">
                        <label>Horário de Início</label>
                        <input type="text" class="form-control" required="" placeholder="AAAA-MM-DD HH:MM"
                            name="txtHoraInicio" value="<?php echo $horaInicio ?>">
                    </div>

                    <div class="form-group">
                        <label>Duração (minutos)</label>
                        <input type="number" class="form-control" required="" placeholder="Duração em minutos"
                            name="txtDuracao" value="<?php echo $duracao ?>">
                    </div>

                    <div class="form-group">
                        <label>ID do Palestrante</label>
                        <input type="number" class="form-control" required="" placeholder="Id do palestrante"
                            name="txtIdPalestrante" value="<?php echo $idPalestrante ?>">
                    </div>

                    <div class="form-group">
                        <label>ID da Área</label>
                        <input type="number" class="form-control" required="" placeholder="Id da área temática"
                            name="txtIdArea" value="<?php echo $idArea ?>">
                    </div>


                    <br>
                    <div class="form-group">

                        <button type="submit" class="btn btn-primary" name="btEditar"
                            formaction="../../actions/palestra_atualizar/index.php">
                            Editar
                        </button>

                        <button type="submit" class="btn btn-warning" name="btExcluir"
                            formaction="../../actions/palestra_deletar/index.php">
                            Excluir
                        </button>


                        <a href="../../index.php">

                            Voltar

                        </a>

                    </div>

                </div>
            </div>
        </div>
    </form>

</body>

</html>