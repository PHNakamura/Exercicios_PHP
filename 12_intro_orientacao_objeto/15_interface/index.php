<?php
// INTERFACE é um modelo de definição de uma classe
// palavra reservada IMPLEMENTS

    interface Caracteristica{

        const nome = "Matheus";

        public function falar();
    }

    class Humano implements Caracteristica{

        public $idade = "deconhecida";

        public function falar(){
            echo "Olá mundo!!! <br>";
        }

        public function dizerNome(){
            echo "Meu nome é: ". self::nome ."<br>";
        }
    }

    $alguem = new Humano;

    $alguem->falar();

    $alguem->dizerNome();
