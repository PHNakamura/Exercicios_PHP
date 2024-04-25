<?php
// Seção 9: Funções
// Exercício de programação 6: Contagem de vogais.
// 1- Crie uma função chamada [countVowels] que recebe um string como parâmetro.
// 2- A função deve retornar a quantidade de vogais presentes na string.
// 3- Utilize uma estrutura de repetição para percorrer cada caractere da string.
// 4- Utilize uma variável para armazenar o contador de vogais.
// 5- Considere que as vogais são as letras "a", "e", "i", "o", "u", em minúsculas ou maiúsculas.
// Dicas:
//


// echo "--------------------------------------------------------------------<br>";
// function palavrasEmLetras($p){
//     $arr = str_split($p);
//     foreach($arr as $aux){
//         echo $aux."<br>";
//     }
//     return $arr;
// }
// print_r(palavrasEmLetras("Samsung"));

// echo "--------------------------------------------------------------------<br>";
// function palavrasEmLetras($p){
//     $arr = str_split($p);
//     return $arr;
// }
// print_r(palavrasEmLetras("Samsung"));


// echo "<br>--------------------------------------------------------------------<br>";
// function countVowels($palavra){
//     $arr =[];
//     $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'á', 'à', 'ã', 'é', 'ê', 'í', 'ó', 'ü', 'ú', 'Á', 'À', 'Ã', 'É', 'Ê', 'Í', 'Ó', 'Ü', 'Ú'];
//     $split = str_split($palavra);
//     foreach($split as $vg){
//         echo $vg."<br>";
//     }
//     var_dump($arr);
//     echo "<br>";
//     print_r($split);
//     echo "<br>";
// }

// countVowels("Abacaxi");


//echo "<br>--------------------------------------------------------------------<br>";
function countVowels($palavra){
    $arr =[];
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $split = str_split($palavra);
    foreach($split as $vg){
        if(in_array($vg, $vowels)){
            array_push($arr, $vg);
            //echo $vg."<br>";
        }
    }
    $x = implode(", ", $arr);
    $y = count($arr);
    echo "<br>";
    echo "São $y vogais da string ('$palavra'). São elas: $x. <br>";

    // var_dump($arr);
    // echo "<br>";
    // print_r($split);
    // echo "<br>";
}

countVowels("Janeiro de 2024");