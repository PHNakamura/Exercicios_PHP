<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 10;

$sql = "SELECT * FROM itens WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

$conn->close();

echo "<br>";
echo "<pre>";
print_r($item);
echo "</pre>";
echo "<br>";
