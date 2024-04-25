<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Criando tabela
// $q = "CREATE TABLE teste
//     (nome VARCHAR(100), 
//     sobrenome VARCHAR(100)
// )";

// Apagando tabela
$q = "DROP TABLE teste";

// Executando comando SQL(criar e/ou apagar tabela)
$conn->query($q);

// $aux = "SELECT * FROM teste";

// $result = $conn->query($aux);

// echo "<pre>";
// print_r($result);
// echo "</pre>";
// echo "<br><br>";
// var_dump($result);

// Fechar a conexão para evitar 'desperdício' de memória (ocupação ociosa)
$conn->close();
