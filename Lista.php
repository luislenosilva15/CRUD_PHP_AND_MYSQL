<?php

include("conectarBanco.php");
$grupo = selectAllPessoa();

function selectAllPessoa()
{
    $banco = abrirBanco();
    $sql = "SELECT * FROM usuario ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Cadastrados</title>
    <link rel="stylesheet" href="css/estiloLista.css">
</head>
<div class="container">

    <body>

        <h1 class="cabecalho">Lista de cadastrados</h1>

        <table border="1" class="table">
            <div class="header">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
                <tbody>
                    <?php
                    foreach ($grupo as $usuario) { ?>
                        <tr>
                            <th><?= $usuario["nome"] ?></th>
                            <th><?= $usuario["email"] ?></th>
                        </tr>
                    <?php }
                    ?>
                </tbody>
        </table>
    </body>
</div>
<form action="index.php">
    <input type="submit" value="Cadastrar Usuário">