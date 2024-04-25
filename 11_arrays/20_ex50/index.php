<?php
$arr =[
    'Veloso' => 50,
    'Jorge' => 35,
    'Souza' => 43,
    'Fernanda' => 30,
    'Luciana' => 45,
    'Maria' => 25
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 50</title>
</head>
<body>
    <table border="2">
        <tr>
                        <th>Nomes</th>
                        <th>Idades</th>
        </tr>
        <?php 
            foreach($arr as $nomes => $idades){?>
                <tr>
                    <td><?= $nomes; ?></td>
                    <td><?= $idades; ?></td>
                </tr>
            <?php } ?> 
    </table>
</body>
</html>



