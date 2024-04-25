<?php

    $method = $_SERVER['REQUEST_METHOD'];
    // echo $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])):
        $nome = $_POST['nome'];
    endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($method == 'GET'):
    ?>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Digite o seu nome">
            </div>
            <div>
                <input type="submit" value=Enviar>
            </div>
        </form>
    <?php else:
    ?>
        <!-- <title><strong>O seu nome é <?= $nome ?>.</strong></title> -->
        <h1><strong>O seu nome é <?= $nome ?>.</strong></h1> 
    <?php
    endif;
    ?>
</body>
</html>

