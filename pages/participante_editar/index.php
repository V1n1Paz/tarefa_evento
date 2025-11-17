<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participante :: Editar</title>
    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <br>
    <?php

    $nome = "";
    $email = "";
    $tipo = "";
    $dataInscricao = "";
    $idPalestra = "";
    $cpf = "";
    $dataRegistro = "";

    // ID do registro a buscar
    $id = $_POST["txtId"];

    // Query com placeholder
    $sql = "SELECT * FROM participante WHERE id_participante = ?";

    // Prepara o statement
    $comando = $conexao->prepare($sql);

    // Vincula o ID
    $comando->bind_param("i", $id);

    // Executa
    $comando->execute();

    // Resultado
    $resultado = $comando->get_result();

    if ($resultado->num_rows > 0) {

        $registro = $resultado->fetch_assoc();

        $nome          = $registro["nome"];
        $email         = $registro["email"];
        $tipo          = $registro["tipo_ingresso"];
        $dataInscricao = $registro["data_inscricao"];
        $idPalestra    = $registro["id_palestra"];
        $cpf           = $registro["cpf_participante"];
        $dataRegistro  = $registro["data_registro"];

    } else {
        echo "Nenhum registro encontrado com o ID informado.";
    }

    // Fecha
    $comando->close();
    $conexao->close();

    ?>

    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2>Participante :: Editar</h2>

                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" required placeholder="ID do participante"
                            name="txtId" value="<?php echo $id ?>">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" required placeholder="Nome do participante"
                            name="txtNome" value="<?php echo $nome ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required placeholder="Email do participante"
                            name="txtEmail" value="<?php echo $email ?>">
                    </div>

                    <div class="form-group">
                        <label>Tipo de Ingresso</label>
                        <input type="text" class="form-control" required placeholder="Estudante ou Profissional"
                            name="txtTipo" value="<?php echo $tipo ?>">
                    </div>

                    <div class="form-group">
                        <label>Data de Inscrição</label>
                        <input type="text" class="form-control" required placeholder="AAAA-MM-DD"
                            name="txtInscricao" value="<?php echo $dataInscricao ?>">
                    </div>

                    <div class="form-group">
                        <label>ID da Palestra</label>
                        <input type="number" class="form-control" required placeholder="ID da palestra"
                            name="txtPalestra" value="<?php echo $idPalestra ?>">
                    </div>

                    <div class="form-group">
                        <label>CPF do Participante</label>
                        <input type="text" class="form-control" required placeholder="CPF"
                            name="txtCpf" value="<?php echo $cpf ?>">
                    </div>

                    <div class="form-group">
                        <label>Data de Registro</label>
                        <input type="text" class="form-control" required placeholder="AAAA-MM-DD HH:MM:SS"
                            name="txtRegistro" value="<?php echo $dataRegistro ?>">
                    </div>

                    <br>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary" name="btEditar"
                            formaction="../../actions/participante_atualizar/index.php">
                            Editar
                        </button>

                        <button type="submit" class="btn btn-warning" name="btExcluir"
                            formaction="../../actions/participante_deletar/index.php">
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
