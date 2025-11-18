<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Palestrante :: Editar</title>
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
    $sql = "SELECT * FROM palestrante WHERE id_palestrante = ?";

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

        $nome = $registro["nome"];
        $formacao = $registro["formacao"];
        $empresa = $registro["empresa"];
        $email = $registro["email"];
        $bio = $registro["bio_resumida"];

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
                    <h2>Palestrante :: Editar</h2>
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

                    <div class="form-group">
                        <label>Formação</label>
                        <input type="text" class="form-control" required="" name="txtFormacao"
                            value="<?php echo $formacao ?>">
                    </div>


                    <div class="form-group">
                        <label>Empresa</label>
                        <input type="text" class="form-control" placeholder="Empresa do palestrante" name="txtEmpresa"
                            value="<?php echo $empresa ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email do palestrante" name="txtEmail"
                            value="<?php echo $email ?>">
                    </div>

                    <div class="form-group">
                        <label>Bio</label>
                        <input type="text" class="form-control" placeholder="Biografia do palestrante" name="txtBio"
                            value="<?php echo $bio ?>">
                    </div>


                    <br>
                    <div class="form-group">

                        <button type="submit" class="btn btn-primary" name="btEditar"
                            formaction="../../actions/palestrante_atualizar/index.php">
                            Editar
                        </button>

                        <button type="submit" class="btn btn-warning" name="btExcluir"
                            formaction="../../actions/palestrante_deletar/index.php">
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