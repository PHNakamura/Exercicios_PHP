<?php
//break (sai do loop)
//continue (passa para a próxima instrução do loop - sem sair do laço de repetição)

$a = 10;

while($a > 0)
{
    if ($a == 5 || $a == 7)
    {
        echo "Pulou a execução do loop (CONTINUE) $a<br>";
        $a--;
        continue;
    }

    if($a == 2)
    {
        echo "Terminando o loop BREAK $a <br>";
        break;
    }

    echo "executando o loop $a<br>";
    $a--;
}

echo "Caiu aqui...<br>";