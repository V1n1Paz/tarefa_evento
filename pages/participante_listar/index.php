<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participante :: Listar</title>

    <?php
    include "../../referencias.php";
    ?>

</head>

<body>
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <br>
                    <h2>Participante :: Listar</h2>

                    <br>

                    <div class="form-group">
                        <table>

                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Tipo Ingresso</th>
                                <th>Data Inscrição</th>
                                <th>ID Palestra</th>
                                <th>CPF Participante</th>
                                <th>Data Registro</th>
                            </tr>

                            <?php
                            // Prepara a instrução SQL
                            $sql = "SELECT * FROM participante ORDER BY nome";

                            // Prepara o statement
                            $comando = $conexao->prepare($sql);

                            // Executa o statement
                            $comando->execute();

                            // Pega o resultado
                            $resultado = $comando->get_result();

                            while ($registro = $resultado->fetch_assoc()) {

                                $id           = $registro["id_participante"];
                                $nome         = $registro["nome"];
                                $email        = $registro["email"];
                                $tipo         = $registro["tipo_ingresso"];
                                $inscricao    = $registro["data_inscricao"];
                                $idPalestra   = $registro["id_palestra"];
                                $cpf          = $registro["cpf_participante"];
                                $dataReg      = $registro["data_registro"];
                                ?>

                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $nome ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $tipo ?></td>
                                    <td><?php echo $inscricao ?></td>
                                    <td><?php echo $idPalestra ?></td>
                                    <td><?php echo $cpf ?></td>
                                    <td><?php echo $dataReg ?></td>
                                </tr>

                            <?php } ?>

                        </table>
                    </div>

                    <br>

                    <div class="form-group">
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
