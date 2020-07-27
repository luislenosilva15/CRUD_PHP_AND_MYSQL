<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado com sucesso</title>
    <link href="css/estiloCadastro.css" rel="stylesheet">
</head>

<body>

    <h1 class="cabecalho">Usuario Cadastrado com sucesso! </h1>
    <?php

    include("conectarBanco.php");

    inserirPessoa();

    // Função responsável inserir uma pessoa no meu banco de dados
    function inserirPessoa()
    {
        $banco = abrirBanco();
        $sql = "INSERT INTO usuario(nome, email, telefone,nascimento, endereco)   VALUES ('{$_POST["nome"]}','{$_POST["email"]}','{$_POST["telefone"]}','{$_POST["nascimento"]}','{$_POST["endereco"]}')";
        $banco->query($sql);
        $banco->close();
    }

    ?>
    <div>
        <form action="Lista.php">
            <input type="submit" value="Mostrar usuários cadastrados">
    </div>
</body>

</html>