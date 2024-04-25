<?php 

// Seção 6. Exercício de programação 4. Verificação e categoria.
// 1- Escreva uma função chamada [verificarCategoria] que recebe um parâmetro de entrada representando uma categoria.
// 2- A função deve retornar uma mensagem de acordo com a categoria fornecida:
//     - Se a categoria for "eletrônicos", retornar "Essa categoria é de produtos eletrônicos".
//     - Se a categoria for "vestuário", retornar "Essa categoria é de vestuário".
//     - Se a categoria for "alimentos", retornar "Essa categoria é de produtos alimentícios".
//     - Para qualquer outra categoria, retornar "Categoria desconhecida".
// 3- O parâmetro de categoria será sempre fornecido como uma string.
// Dica: usar SWITCH.


    // function verificarCategoria($cat)
    // {
    //     if($cat == "eletrônico" || $cat == "eletronico" || $cat == "Eletrônico" || $cat == "Eletronico" || $cat == "ELETRÔNICO" || $cat == "ELETRONICO")
    //     {
    //         echo "Essa categoria é de produtos eletrônicos. <br>";
    //     }
    //     else if($cat == "vestuário" || $cat == "vestuario" || $cat == "Vestuário" || $cat == "Vestuario" || $cat == "VESTUÁRIO" || $cat == "VESTUARIO")
    //     {
    //         echo "Essa categoria é de vestuário. <br>";
    //     }
    //     else if($cat == "alimentos" || $cat == "Alimentos" || $cat == "ALIMENTOS")
    //     {
    //         echo "Essa categoria é de produtos alimentícios. <br>";
    //     }
    //     else
    //     {
    //         echo "Categoria desconhecida. <br>";
    //     }
    // }

    // echo "<br>1)<br>";
    // verificarCategoria("vestuário");
    // echo "<br>2)<br>";
    // verificarCategoria("Alimentos");
    // echo "<br>3)<br>";
    // verificarCategoria("eletrônico");
    // echo "<br>4)<br>";
    // verificarCategoria("VESTUARIO");
    // echo "<br>5)<br>";
    // verificarCategoria("Bebidas");
    // echo "<br>6)<br>";
    // verificarCategoria("Camping");
    // echo "<br>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    function verCat($c)
    {
        switch ($c)
        {
            case "eletrônicos":
                echo "Essa categoria é de produtos eletrônicos. <br>";
                break;
            case "vestuário":
                echo "Essa categoria é de vestuário. <br>";
                break;
            case "alimentos":
                echo "Essa categoria é de produtos alimentícios. <br>";
                break;
            default:
            echo "Categoria desconhecida. <br>";
        }
    }

    echo "<br>7)<br>";
    verCat("vestuário");
    echo "<br>8)<br>";
    verCat("alimentos");
    echo "<br>9)<br>";
    verCat("eletrônicos");
    echo "<br>10)<br>";
    verCat("VESTUARIO");
    echo "<br>11)<br>";
    verCat("Bebidas");
    echo "<br>12)<br>";
    verCat("Camping");
    echo "<br>";


?>