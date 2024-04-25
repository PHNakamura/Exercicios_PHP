<?php
// classe anonima -> criada em uma variável (Não possuem nome)
// ao final do bloco da construção da classe, é preciso fechar com ;(ponto e virgula) após a }(chave)
// na verdade é uma instrução de variável
// não tem propriedades de herança.
// exemplo:      $anonima = new class (){ instrução };

    $pessoa = new class(){
        public $nome = "Skywalker";

        public function dizerNome(){
            echo "Olá! Meu nome é: $this->nome. <br>";
        }
    };

    echo $pessoa->nome;
    echo "<br>";
    echo "<br>";

    $pessoa->dizerNome();
    echo "<br>";

