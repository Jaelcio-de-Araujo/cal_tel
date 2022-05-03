<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/ajax.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Cadastro de Telefone</title>
</head>
<body>
    <div class="container">
        <section id="form">
            <div id="table">
                <table>
                    <tr>
                        <td></td>
                        <td>
                            <h2>Cadastro de Telefone</h2>
                            <form class="form-inline" method="post" action="php/insere.php">
                            <div class="form-group mx-sm-3 mb-2">
                            <label for="telefone" class="sr-only">Telefone</label>
                            <input type="text" class="form-control" placeholder="(00) 0000-0000" name="telefone" id="telefone" placeholder="Digite um número de telefone" maxlength="15" required/>
                            </div>
                            <input type="submit" class="btn mb-2" value="Cadastrar" id="but_salvar">
                        </form>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
</body>
</html>