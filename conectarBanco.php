<?php
// Responsável por criar uma conexão com meu banco
function abrirBanco() {
    $conexao = new mysqli("localhost", "root", "", "cadastro");
    return $conexao;
}
