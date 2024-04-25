<?php

    // #Arquivos que não exixtem
    //include_once "teste.php";

    // #Arquivos que existem
    echo "include_once <br>";
    include_once "teste2.php";
    include_once "teste2.php";

    // #Arquivos que não existem
    //require_once "teste.php";
    
    echo "<br> require_once <br>";
    require_once "teste3.php";
    require_once "teste3.php";

    echo "<br> include <br>";
    include "teste10.php";
    include "teste10.php";
    echo "<br> require <br>";
    require "teste10a.php";
    require "teste10a.php";

?>

<p>Testando o código (fora do php - arquivo: index.php)!</p>
