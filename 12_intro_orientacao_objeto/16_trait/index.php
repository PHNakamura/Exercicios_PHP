<?php
// Permite o reuso do código sem hierarquia (HERANÇA) de classe - TRAIT
// palavra reservada - USE

    trait Objeto {
        public function teste(){
            echo "Testando trait de Objeto. <br>";
        }
    }

    trait Testando {
        public $y = 10;

        public function testeTestando(){
            echo "Este método é da trait Testando. <br>";
        }
    }

    class Central{
        use Objeto;
        use Testando;
    }

    $x = new Central;

    $x->teste();
    echo "<br><br>";

    $x->testeTestando();
    echo "<br><br>";

    echo $x->y;
    echo "<br><br>";