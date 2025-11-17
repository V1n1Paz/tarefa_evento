<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestra :: Marcar</title>
    <?php
    include "../../referencias.php";

    ?>
</head>

<body>
    <form method="post" action="../../actions/palestra_inserir/index.php">
        <div class="container">
            <div class="row">
                <div>
                    <br>
                    <h2>Palestra :: Marcar</h2>
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" required="" placeholder="Título" name="txtTitulo">
                    </div>

                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" class="form-control" required="" placeholder="Descricao" name="txtDescricao">
                    </div>

                    <div class="form-group">
                        <label>IdPalestrante</label>
                        <input type="text" class="form-control" required="" placeholder="Palestrante" name="txtIdPalestrante">
                    </div>

                    
                    <div class="form-group">
                        <label>ID Área</label>
                        <input type="text" class="form-control" required="" placeholder="ID da Área" name="txtIdArea">
                    </div>
                    
                    <div class="form-group">
                        <label>Horário de Início</label>
                        <input type="text" class="form-control" required="" placeholder="Inicio" name="txtHoraInicio">
                    </div>
                    
                    <div class="form-group">
                        <label>Duração em minutos</label>
                        <input type="number" class="form-control" required="" placeholder="Duração" name="txtDuracao">
                    </div>





                    <br>
                    <div class="form-group">

                        <button class="btn btn-primary" type="submit">Cadastrar</button>

                        <a href="../../index.php">
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