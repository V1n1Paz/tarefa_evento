<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestrantes :: Listar</title>

    <?php
    include "referencias.php";

    ?>

</head>

<body>
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


                    <br>
                    <h2>Palestrantes :: Listar</h2>

                    <br>

                    <div class="form-group">
                        <table>


                            <tr>
                                <th>ID .</th>
                                <th>Nome .</th>
                                <th>Formação </th>
                                <th>Empresa </th>
                                <th>Email </th>
                                <!-- <th>Bio</th> -->
                            </tr>

                            <?php
                            // Prepara a instrução SQL com um placeholder '?'
                            $sql = "SELECT * FROM palestrante ORDER BY nome";

                            // Prepara o statement
                            $comando = $conexao->prepare($sql);

                            // Executa o statement
                            $comando->execute();

                            // Pega o resultado da consulta
                            $resultado = $comando->get_result();

                            while ($registro = $resultado->fetch_assoc()) {

                                $id = $registro["id_palestrante"];
                                $nome = $registro["nome"];
                                $formacao = $registro["formacao"];
                                $empresa = $registro["empresa"];
                                $email = $registro["email"];
                                $bio = $registro["bio_resumida"];
                                ?>

                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $nome ?></td>
                                    <td><?php echo $formacao ?></td>
                                    <td><?php echo $empresa ?></td>
                                    <td><?php echo $email ?></td>
                                    <!-- <td><?php echo $bio ?></td> -->
                                </tr>

                            <?php } ?>


                        </table>
                    </div>

                    <br>

                    <div class="form-group">

                        <a href="index.php">
                            <button type="button" class="btn btn-danger" name="btVoltar">
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