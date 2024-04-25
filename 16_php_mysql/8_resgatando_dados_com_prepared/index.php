<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;

$sql = "SELECT * FROM itens WHERE id > ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

$conn->close();

echo "<pre>";
echo 'print_r($data): ';
print_r($data);
echo "</pre>";
echo "<br>";

echo "<br>";
echo "<pre>";
echo 'var_dump($result): ';
var_dump($result);
echo "</pre>";
echo "<br>";

