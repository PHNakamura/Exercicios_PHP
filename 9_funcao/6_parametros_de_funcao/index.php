<?php

// function velMaxima($vel)
// {
//     echo "O carro atinge a velocidade máxima de $vel km/h <br>";
// }


//Com tratamento de dados
function velMaxima($vel)
{
    if(is_int($vel)):
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    else:
        echo "Por favor passe um número inteiro.<br>";
    endif;
}


velMaxima(200);
velMaxima(300);
velMaxima(400);

// Não se pode executar funções que exigem parametros sem eles. Dá Fatal Error
//velMaxima();
echo "<br>";
echo "Teste - Continuando... <br>";

$velocidade = 125;
velMaxima($velocidade);

//(PHP ignora parâmetros desnecessários)
velMaxima(250, "teste");

velMaxima("teste");

echo "<br>";
echo "-----------------------------------------------------------------------<br>";

function descreverAnimal($nome, $raca)
{
    echo "O $nome é da raça $raca.<br>";
}


descreverAnimal("Bob", "vira latas");
descreverAnimal("Shark", "pastor alemão");

echo "<br>";
// O "usuario" tem que saber como usar as funções e seus paramteros/argumentos
// exemplo:
descreverAnimal("poodle", "Tita");

// Poucos argumentos - FATAL ERROR (Too few arguments)
//descreverAnimal("poodle");

