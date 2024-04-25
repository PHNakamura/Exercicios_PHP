<?php
// O caimho onde os arquivos são salvo fica na descrição do php.ini (Xampp)
// Abrir o painel do Xampp (config) para acessar o arquivo php.ini
// Dentro das configurações do arquivo estará: session.save_path
// Pode ser salvo em dois formatos: php e também o WDDX(Web Distributed Data eXchange)

session_start();

print_r($_SESSION);

$_SESSION['nome'] = 'Matheus';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session!</h1>
</body>
</html>