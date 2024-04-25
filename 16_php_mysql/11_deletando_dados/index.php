<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Teste";

$sql = "DELETE FROM itens WHERE nome = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $nome);

$stmt->execute();

$cons = "SELECT * FROM itens";

$aux = $conn->query($cons);

$conn->close();

$dados = $aux->fetch_all();

echo "<pre>";
print_r($dados);
echo "</pre>";
echo "<br>";

