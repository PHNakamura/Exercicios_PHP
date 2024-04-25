<?php
// HTTP é um protocolo que não mantém o estado (STATELESS)

    setcookie("nome", "Mateus", time() + 3600);

    if(isset($_COOKIE["nome"])){
        $nome = $_COOKIE["nome"];
    }
    echo 'arquivo: index.php <br>';
    echo "<br>Teste fora do if - (isset(\$_cookie[nome]): $nome <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá mundo!</h1>
    
    <?php if($nome != ""): ?>
        <h2 style="color: red;">Seja bem vindo <?= $nome ?></h2>
    <?php endif;?>
</body>
</html>
