<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Palestrante :: Pesquisar</title>
    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <form method="post" action="../palestrante_editar/">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <h2>Palestrante :: Pesquisar</h2>
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" required="" placeholder="Id do palestrante"
                            name="txtId">
                    </div>


                    <br>
                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Pesquisar</button>

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