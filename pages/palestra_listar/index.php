<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestras :: Listar</title>

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
                    <h2>Palestra :: Listar</h2>

                    <br>

                    <div class="form-group">
                        <table>

                            <tr>
                                <th>ID .</th>
                                <th>Título .</th>
                                <th>Descrição </th>
                                <th>Hora início </th>
                                <th>Duração (min) </th>
                                <th>Palestrante </th>
                                <th>Área </th>
                            </tr>

                            <?php
                            // Prepara a instrução SQL
                            $sql = "SELECT 
                                        p.id_palestra,
                                        p.titulo,
                                        p.descricao,
                                        p.horario_inicio,
                                        p.duracao_minutos,
                                        pa.nome AS nome_palestrante,
                                        a.nome_area AS nome_area
                                    FROM palestra p
                                    INNER JOIN palestrante pa 
                                        ON pa.id_palestrante = p.id_palestrante
                                    INNER JOIN area_tematica a 
                                        ON a.id_area = p.id_area
                                    ORDER BY p.titulo";

                            // Prepara o statement
                            $comando = $conexao->prepare($sql);

                            // Executa
                            $comando->execute();

                            // Resultado
                            $resultado = $comando->get_result();

                            while ($registro = $resultado->fetch_assoc()) {

                                $id = $registro["id_palestra"];
                                $titulo = $registro["titulo"];
                                $descricao = $registro["descricao"];
                                $horaInicio = $registro["horario_inicio"];
                                $duracao = $registro["duracao_minutos"];
                                $palestrante = $registro["nome_palestrante"];
                                $area = $registro["nome_area"];
                                ?>

                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $titulo ?></td>
                                    <td><?php echo $descricao ?></td>
                                    <td><?php echo $horaInicio ?></td>
                                    <td><?php echo $duracao ?></td>
                                    <td><?php echo $palestrante ?></td>
                                    <td><?php echo $area ?></td>
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
