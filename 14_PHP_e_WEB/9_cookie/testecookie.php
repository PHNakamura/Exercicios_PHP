<?php
    if(isset($_COOKIE["nome"])){
        $nome = $_COOKIE["nome"];
    }
    echo "Teste fora do if - (isset(\$_cookie[nome]): $nome <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style="color: orangered;"> arquivo: 'testecookie.php'</h3>
    <h1 style="color: blue; text-decoration:underline;">Olá mundo!</h1>
    
    <?php if($nome != ""): ?>
        <h2 style="color: navy; text-decoration: line-through; background-color: lightgrey;">Seja bem vindo <?= $nome ?></h2>
    <?php endif;?>
</body>
</html>
