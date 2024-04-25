<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

/* $tabela = "itens";
$nome = "Suporte para microfone";
$descricao = "O suporte é novo e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO $tabela (nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao); // s = string; i = integer; d = double
 */
$tabela = "itens";
$nome = "Suporte para microfone usado";
$descricao = "O suporte é usado e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO $tabela (nome, descricao) VALUES (?, ?)");

// testei usar "s" e dá erro. Tem que usar "ss" - Usa-se "ss" porque são dois valores ($nome e $descricao)
$stmt->bind_param("ss", $nome, $descricao); // s = string; i = integer; d = double

$stmt->execute();