<?php

// exemplo de loop infinito (pode travar o pc)

for($i = 0; $i < 10; $i--) //O correto é $i++ (incremento)
{
    echo "Teste [$i]; <br>";
}
