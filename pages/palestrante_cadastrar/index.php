<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestrante :: Cadastrar</title>
    <?php
    include "../../referencias.php";
    ?>
</head>

<body>
    <form method="post" action="../../actions/palestrante_inserir/">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <h2>palestrante :: Marcar</h2>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" required="" placeholder="Pedro da Silva" name="txtNome">
                </div>

                <div class="form-group">
                    <label>Formação</label>
                    <input type="text" class="form-control" required="" placeholder="Graduado em Engenharia de Software" name="txtFormacao">
                </div>
                
                <div class="form-group">
                    <label>Empresa</label>
                    <input type="text" class="form-control" required="" placeholder="Oracle" name="txtEmpresa">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required="" placeholder="email@example.com" name="txtEmail">
                </div>

                <div class="form-group">
                    <label>Bio</label>
                    <input type="text" class="form-control" required=""placeholder="Engenheiro de Software no Google especializado em soluções escaláveis e desenvolvimento de sistemas de alta performance para milhões de usuários."  name="txtBio">
                </div>
                
     
                <br>
                <div class="form-group">

                    <button class="btn btn-primary" type="submit">Marcar</button>

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