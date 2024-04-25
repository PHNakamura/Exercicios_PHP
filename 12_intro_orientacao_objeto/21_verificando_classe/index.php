<?php
// Ajudam a entender as classes. Exxemplos:
// CLASS_EXISTS() - verifica se uma classe existe
// GET_CLASSS_METHODS() - Verifica os métodos de uma classe
// GET_CLASS_VARS() - mapeia as propriedades de uma classe

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar(){
            echo "Estou falando! <br>";
        }

        public function andar(){
            echo "Andando estou! <br>";
        }

    }

    echo "class Humano: <br>";
    if(class_exists('Humano')){
        echo "Sim! a classe existe. <br>";
    } else {
        echo "A classe NÃO existe. <br>";
    }

    echo "<br>";
    echo "class Animal: <br>";
    if(class_exists('Animal')){
        echo "Sim! a classe existe. <br>";
    } else {
        echo "A classe NÃO existe. <br>";
    }

    echo "<br>";
    echo 'get_class_vars: <br>';
    print_r(get_class_vars('Humano'));
    echo "<br>";

    echo "<br>";
    echo 'get_class_methods: <br>';
    print_r(get_class_methods('Humano'));
    echo "<br>";
