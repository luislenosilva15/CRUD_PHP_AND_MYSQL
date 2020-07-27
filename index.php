<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#telefone").mask("(00) 0000-0000")
        })
    </script>
    <link href="css/Estilo.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <form action="Cadastrar.php" method="post">

            <h1 class="cabecalho"> Formulário de cadastro </h1>

            <div class="row">
                <div class="col-25">
                    <label for="nome"> Nome </label>
                </div>
                <div class="col-75">
                    <input type="text" id="nome" name="nome" placeholder="Insira seu nome" value="" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email"> Email </label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Insira seu email" value="" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="telefone"> Telefone </label>
                </div>
                <div class="col-75">
                    <input type="text" id="telefone" name="telefone" placeholder="Insira seu telefone" value="">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="nascimento">Data de nascimento</label>
                </div>
                <div class="col-75">
                    <input type="date" id="nascimento" name="nascimento" placeholder="Qual sua data de nascimento?" value="">
                </div>
            </div>
            <div class="col-25">
                <label for="endereco">Endereço</label>
            </div>
            <div class="col-75">
                <input type="text" id="endereco" name="endereco" placeholder=" Qual seu endereço?" value="">
            </div>

    </div>
    <div class="row">
        <input type="submit" value="Enviar" name="Enviar">

    </div>
    </div>
    </form>

    <form action="Lista.php">
        <input type="submit" value="Usuários Cadastrado">
    </form>
    </div>

</body>

</html>