<?php

// Crie um array associtivo com chaves com valor de nomes, e valores com uma pontuação;
// Ordene os dados do maior para o menor
// Exiba uma lista, simulando um ranking, em HTML

$arr = [
    'Pafuncio' => 1000,
    'Abadia' => 90,
    'Zacarias' => 900,
    'Malaquias' => 500,
    'Jotalhão' => 750,
    'Benedito' => 350,
    'Ignácio' => 10,
    'Izaura' => 10,
    'Higino' => 650,
    'Gorete' => 800
];

echo 'array[$arr]: (original).<br>';
print_r($arr);
echo "<br>";
echo "<br>";
echo "--------------------------------------------------------------------------------------<br>";

$keys = array_keys($arr);
$values = array_values($arr);

$arrCopia = $arr;

echo 'array[$arrCopia]: (Cópia).<br>';
print_r($arrCopia);
echo "<br>";
echo "<br>";
echo "--------------------------------------------------------------------------------------<br>";
echo "--------------------------------------------------------------------------------------<br>";
echo "--------------------------------------------------------------------------------------<br>";

$arrAsort = $arrCopia;
asort($arrAsort);

echo 'array[$arrAsort]:  - ASORT.<br>';
print_r($arrAsort);
echo "<br>";
echo "<br>";
echo "--------------------------------------------------------------------------------------<br>";

// apenas para teste - para saber se alterava os arrays originais
// echo 'array[$arr]: (original) - ASORT.<br>';
// print_r($arr);
// echo "<br>";
// echo "<br>";
// echo "--------------------------------------------------------------------------------------<br>";

// echo 'array[$arrCopia]: (Cópia) - ASORT.<br>';
// print_r($arrCopia);
// echo "<br>";
// echo "<br>";
echo "--------------------------------------------------------------------------------------<br>";
echo "--------------------------------------------------------------------------------------<br>";
//echo "--------------------------------------------------------------------------------------<br>";


$arrKsort = $arrCopia;
Ksort($arrKsort);

echo 'array[$arrKsort]:  - KSORT.<br>';
print_r($arrKsort);
echo "<br>";
echo "<br>";
echo "--------------------------------------------------------------------------------------<br>";

// apenas para teste - para saber se alterava os arrays originais
// echo 'array[$arr]: (original) - KSORT.<br>';
// print_r($arr);
// echo "<br>";
// echo "<br>";
// echo "--------------------------------------------------------------------------------------<br>";

// echo 'array[$arrCopia]: (Cópia) - KSORT.<br>';
// print_r($arrCopia);
// echo "<br>";
// echo "<br>";
echo "--------------------------------------------------------------------------------------<br>";
echo "--------------------------------------------------------------------------------------<br>";
//echo "--------------------------------------------------------------------------------------<br>";




?>




<h1>RANKING - pontuação</h1>
<ol style="display: block;">
    <?php foreach($arrAsort as $chave => $valor):?>
        <li><?=$chave?> => <?=$valor?> pontos </li>
    <?php endforeach; ?>
</ol>

<?= "--------------------------------------------------------------------------------------<br>"; ?>
<?= "--------------------------------------------------------------------------------------<br>"; ?>
<?= "--------------------------------------------------------------------------------------<br>"; ?>


<body>
    <div style="display: flex; justify-content: space-around;">
        <table border="3">
            <th colspan="2">Tabela de ranqueamento - Pontuação</th>
            <tr>
                <th>Nome</th>
                <th>Pontuação</th>
            </tr>
            <?php foreach($arrAsort as $keys => $values):?>
                <tr>
                    <td><?= $keys; ?></td>
                    <td><?= $values; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div style="display: flex; justify-content: space-around;">
        <table border="3">
            <th colspan="2">Tabela de ranqueamento - Nome</th>
            <tr>
                <th>Nome</th>
                <th>Pontuação</th>
            </tr>
            <?php foreach($arrKsort as $keys => $values):?>
                <tr>
                    <td><?= $keys; ?></td>
                    <td><?= $values; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>