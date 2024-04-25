<?php
// classes abstratas NÃO podem ser instanciadas
// palavra reservada - ABSTRACT

    abstract class Teste{
        public static function testandoClasse(){
            echo "Este método é de uma classe ABSTRATA. <br>";
        }

    abstract public function testeAbs();

    }
        
//$t = new Teste;   // fatal error: não se pode instanciar uma classe abstrata.

    Teste::testandoClasse();    

    class Nova extends Teste{
        public function testeAbs()
        {
            echo "Teste método abstrato. <br>";
        }
    }

    $n = new Nova;

    $n->testeAbs();
