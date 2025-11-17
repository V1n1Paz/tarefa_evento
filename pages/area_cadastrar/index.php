<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área temática :: Cadastrar</title>
    <?php
    include "../../referencias.php";

    ?>
</head>

<body>
    <form method="post" action="../../actions/area_inserir/index.php">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <h2>Área temática :: Cadastrar</h2>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" required="" placeholder="Auditório" name="txtNome">
                    </div>

                    <br>
                    <div class="form-group">

                        <button class="btn btn-primary" type="submit">Cadastrar</button>

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