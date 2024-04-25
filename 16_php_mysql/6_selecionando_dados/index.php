<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// um resultado
$item = $result->fetch_assoc();

// Todos os resultados
$itens = $result->fetch_all();

echo "<pre>";
print_r($item);
echo "</pre>";

echo "<br><br>";

echo "<pre>";
print_r($itens);
echo "</pre>";
