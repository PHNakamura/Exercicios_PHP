<?php

class Cachorro{

    function latir($x){
        if(is_numeric($x)):
            for($i = 1; $i <= $x; $i++){
                echo "Au! <br>";
            }
        else:
            echo "Por favor informe um número!<br>";
        endif;
    }


    function andar(){
        echo "<br>Estou andando!<br>";
    }

}


$toto = new Cachorro;

$toto->latir(5);

$toto->andar();

