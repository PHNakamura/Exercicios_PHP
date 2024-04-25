<?php 

$p1 = 
[
    'nome' => 'Benjamin',
    'nacionalidade' => 'brasileiro',
    'idade' => 20,
    'altura' => 1.75
];

$p2 =
[
    'Maria',
    'portuguesa',
    17,
    1.6
];

$p3 = ['nome' => 'Matheus', 'idade' => 29, 'profissao' => 'programador', 'graduacao' => 'Sistemas da Informação'];

echo "<br>";
echo "$p1[nome] é $p1[nacionalidade] e tem $p1[altura]m de altura. <br>";
if ($p1['idade']>=18):
    echo "$p1[nome] é maior de idade. <br>";
else:
    echo "$p1[nome] é menor de idade. <br>";
endif;

echo "<br>";
echo "$p2[0] é $p2[1] e tem $p2[3]m de altura.<br>";
if ($p2[2]>=18):
    echo "$p2[0] é maior de idade. <br>";
else:
    echo "$p2[0] é menor de idade. <br>";
endif;

$maioridade = 18;

echo "<br>";
if($p3['idade']>=$maioridade)
{
    echo "$p3[nome] é maior de idade";
};
if($p3['idade']<$maioridade)
{
    echo "$p3[nome] é menor de idade";
};
