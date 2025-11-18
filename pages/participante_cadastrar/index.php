<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Participante :: Cadastrar</title>
    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <form method="post" action="../../actions/participante_inserir/">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <br>
                    <h2>Participante :: Cadastrar</h2>

                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" required=""
                               placeholder="Apenas números, ex: 12345678901"
                               name="txtCpf">
                    </div>

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" required=""
                               placeholder="João da Silva"
                               name="txtNome">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required=""
                               placeholder="email@example.com"
                               name="txtEmail">
                    </div>

                    <div class="form-group">
                        <label>Tipo de Ingresso</label>
                        <select class="form-control" required="" name="txtTipoIngresso">
                            <option value="Estudante">Estudante</option>
                            <option value="Profissional">Profissional</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Data de Inscrição</label>
                        <input type="date" class="form-control" required=""
                               name="txtDataInscricao">
                    </div>

                    <div class="form-group">
                        <label>ID da Palestra</label>
                        <input type="number" class="form-control" required=""
                               placeholder="ID da palestra que o participante irá assistir"
                               name="txtIdPalestra">
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
