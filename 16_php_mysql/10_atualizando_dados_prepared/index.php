<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 10;

$sql = "UPDATE itens SET nome = ?, descricao = ?  WHERE id = ?";

$stmt = $conn->prepare($sql);

$nome = "Sofá";
$descricao = "Sofá semi novo, com madeira de de dolição";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error):
    echo "Erro: ". $stmt->error;
endif;

$consulta = "SELECT * FROM itens";

$result = $conn->query($consulta);

$conn->close();

$dados = $result->fetch_all();

echo "<pre>";
echo 'print_r($dados): ';
echo "<br>";
print_r($dados);
echo "</pre>";
echo "<br>";