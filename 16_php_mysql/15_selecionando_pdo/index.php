<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

$tabela = "itens";
$id = 5;

$sql = "SELECT * FROM $tabela WHERE id > :id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":id", $id, PDO::PARAM_INT);

$stmt->execute();

// Um único registro (com ID > 5)
$data = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
echo '$stmt->fetch(): ';
print_r($data);
echo "</pre>";
echo "<br>";

// Todos os registros (com ID > 5)
$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "";
echo "<pre>";
echo '$stmt->fetchAll(): ';
print_r($itens);
echo "</pre>";
echo "<br>";
