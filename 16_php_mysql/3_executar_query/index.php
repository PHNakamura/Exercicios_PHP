<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// if($conn -> connect_errno){
//     echo 'Erro na conexão!!! <br>';
//     echo 'ERROR: '.mysqli_connect_error();
//     echo "<br> <br>";
    // ou escrever de forma orientada a objeto:
    // echo '(OO) ERROR: '.$conn->connect_error;
// }

// assunto da aula

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

echo "<pre>";
print_r($result);
echo "</pre>";

// Fechar a conexão para evitar 'desperdício' de memória (ocupação ociosa)
$conn->close();
