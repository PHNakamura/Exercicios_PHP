<?php

$host="localhost";
$db="agenda";
$user="root";
$pass="";

try {
    
    $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $passs);

    // "ativa" o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    // erro na conexão
    $error = $e->getMessage();
    
    echo "Erro: $error <br>";
    
}

// comentar depois - não precisa ser exibido
$conex = $conn ? "Conexão estabelecida!!!" : "SEM CONEXÃO...";

echo $conex;