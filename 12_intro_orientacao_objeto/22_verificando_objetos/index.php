<?php
// exemplo de alguns métodos que ajudam aa entender melhor os objetos
// IS_OBJECT() - verifica se a variável é um objeto
// GET_CLASS() - verifica a classe de um objeto
// METHOD_EXISTS - verifica se o método existe em um objeto

use Humano as GlobalHumano;

    class HUMANO {

        public function falar(){
            echo "<br>Olá!<br>";
        }
    }


    $Zoroastro = new Humano;

    echo '(is_object($Zoroastro)): <br>';
    if(is_object($Zoroastro)):
        echo "É um objeto. <br>";
    else:
        echo "Não é um objeto. <br>";
    endif;

    $teste = 10;
    echo '<br>(is_object($teste)):<br>';
    if(is_object($teste)):
        echo "É um objeto. <br>";
    else:
        echo "Não é um objeto. <br>";
    endif;


    echo "<br><br>";
    echo 'get_class($Zoroastro): <br>';
    echo get_class($Zoroastro);
    echo "<br><br>";

    echo 'get_class($teste)<br>';
    echo 'get_class($teste)  -  FATAL ERROR: TypeError: get_class() - Argument#1: Must be type of object';
    echo "<br><br>";


    echo '(method_exists($Zoroastro, "falar")): <br>';
    if(method_exists($Zoroastro, 'falar')):
        echo "Método existe. <br>";
    else:
        echo "Método NÃO existe. <br>";
    endif;

    echo "<br>";

    echo '(method_exists($Zoroastro, "asd")): <br>';
    if(method_exists($Zoroastro, 'asd')):
        echo "Método existe. <br>";
    else:
        echo "Método NÃO existe. <br>";
    endif;