<?php

    class Cachorro{

        public $nome;
        public $raca;
        public $cor;
        public $porte; 

        function __construct($nome, $raca, $cor, $porte)
        {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->cor = $cor;
            $this->porte = $porte;
        }

        function exibirCachorro(){
            echo "$this->nome é da raça $this->raca, tem a cor $this->cor e é de $this->porte porte. <br>";
        }
    }

    $cao = new Cachorro("Totó", "Doberman", "preta", "grande");

    $cao->exibirCachorro();


    // e também pode ser assim:


    $nome = "Tubarão";
    $raca = "Vira-latas";
    $cor = "verde";
    $porte = "pequeno";

    $pet = new Cachorro($nome, $raca, $cor, $porte);

    $pet->exibirCachorro();

