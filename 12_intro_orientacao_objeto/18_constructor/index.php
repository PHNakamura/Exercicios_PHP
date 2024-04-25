<?php
// construtores
// FUNCTION__CONSTRUCT($argumento(s))

    class Car{

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }
$carro = new Car(4, "vermelha", "Ferrari");

echo "O carro é da marca $carro->marca e é da cor $carro->cor. <br>";


$carro1 = new Car(4, "verde", "BMW");

echo "O carro é da marca $carro1->marca e é da cor $carro1->cor. <br>";
