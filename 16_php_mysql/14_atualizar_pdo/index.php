<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

$tabela = "itens";
$id = 5;
$nome = "Teclado Microsoft";
$descricao = "O teclado é novo e está na caixa.";

$sql = "UPDATE $tabela SET nome = :nome, descricao = :descricao WHERE id = :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
$stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);

$stmt->execute();

// http://localhost/PHP/Hora%20de%20Codar%20-%20M.Batisti/16_php_mysql/
