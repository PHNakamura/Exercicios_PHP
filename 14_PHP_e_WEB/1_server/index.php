<?php
// Explorando $_SERVER (variável de ambiente)
// Traz diversas informações importantes
// SERVER_SOFTWARE => Identificação do servidor
// SERVER_NAME => HostName, DNS ou IP do servidor
// SERVER_PROTOTOCL => Protocolo do servidor
// SERVER_PORT => Porta do servidor
// QUERY_STRING => Argumentos após o ? na URL


    echo "<br>";
    echo "<pre>";
    echo '$_server: <br>';
    print_r($_SERVER);
    echo "</pre>";
    echo "<br>";
    echo "------------------------------------------------------------------------<br><br>";

    echo '$_SERVER["MYSQL_HOME"]: <br>';
    echo $_SERVER['MYSQL_HOME'];
    echo "<br>";
    echo "------------------------------------------------------------------------<br><br>";


    if($_SERVER['SERVER_NAME'] == 'localhost'):
        echo 'if($_SERVER["SERVER_NAME"] == "localhost"): <br>';
        echo "Está acessando o localhost. <br>";
    endif;
    echo "<br>";
    echo "------------------------------------------------------------------------<br><br>";

    
