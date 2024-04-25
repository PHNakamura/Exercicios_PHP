<?php 

// Seção 6. Exercício de programação 3: Cálculo de desconto
// 1- Escreva uma função chamada [calcularDesconto] que receba dois parametros: o valor de um produto e uma categoria.
// 2- A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria. 
// 3- Considere as seguintes categorias e seus respectivos descontos:
//     - Eletrônico: 10% de desconto;
//     - Vestuário: 20% de desconto;
//     - Alimentos: 5% de desconto;
//     - Outras categorias: Nenhum desconto;
// 4- Se a categoria for desconhecida ou não estiver na lista acima, o desconto será zero.
// 5- O valor do produto e a categoria serão sempre fornecidos como argumentos da função.

function calcularDesconto($v, $c)
{
$cat = ['Eletrônico'=>1.1, 'Vestuário'=>1.2, 'Alimentos'=> 1.05];
$cat_el = $cat['Eletrônico'];
$cat_vest = $cat['Vestuário'];
$cat_al = $cat['Alimentos'];
$msg = "O novo valor será de R$: ";

    if ($c == "Eletrônico" || $c == "Eletronico" || $c == "eletronico" || $c == "eletrônico")
    {
        $novo_vl = round(($v / $cat_el),2);
        echo $msg.$novo_vl."<br>";
    }
    else if($c == "Vestuário" || $c == "Vestuario" || $c == "vestuário" || $c == "vestuario")
    {
        $novo_vl = round(($v / $cat_vest),2);
        echo $msg.$novo_vl."<br>";
    }
    else if($c == "Alimentos" || $c == "alimentos")
    {
        $novo_vl = round(($v / $cat_al),2);
        echo $msg.$novo_vl."<br>";
    }
    else
    {
        echo "Categoria desconhecida.<br>";
        echo "O valor não será alterado.<br>";
    }
}

echo "<br>";
echo "1) <br>";
calcularDesconto(100, "Eletrônico");
echo "<br>";
echo "2) <br>";
calcularDesconto(100, "Vestuário");
echo "<br>";
echo "3) <br>";
calcularDesconto(100, "Alimentos");
echo "<br>";
echo "4) <br>";
calcularDesconto(100, "Lazer");
echo "<br>";
echo "5) <br>";
calcularDesconto(100, "Eletronico");
echo "<br>";
echo "6) <br>";
CalcularDesconto(100, "Bebidas");
echo "<br>";