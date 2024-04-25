<?php
// Seção 12: Introdução a Orientação a Objetos
// Exercício de programação 16: Sistema de Reserva de Passagens
// 1- Crie uma classe chamada [Passenger] que represente um passageiro.
// 2- A classe [Passenger] deve conter os seguintes aatributos:
//    2a- [name]: Nome do passageiro.
//    2b- [age]: Idade do passageiro.
//    2c- [seatNumber]: Número do assento do passageiro.
// 3- A classe [Passenger] deve ter os seguintes métodos:
//    3a- [getName()]: Retorna o nome do passageiro.
//    3b- [getAge()]: Retorna a idade do passageiro.
//    3c- [getSeatNumber()]: Retorna o número do assenco do passageiro.
//    3d- [setSeatNumber($seatNumber)]: Atualiza o número do assento do passageiro.
// Dicas:
//  Lembre-se de incluir a declaração da classe com [class Passenger].
//  Utilize um atributo para cada  atributo da classe.
//  Os métodos [getNme()], [getAge()] e [getSeatNumber()] devem retornar os respectivos valores as propriedades.
// O método [SetSeatNumber($seatNumber)] deve atualizar o valor da propriedade [seatNumber].



    class Passenger{
        
        public $name = "Maria";
        public $age = 30;
        public $seatNumber = "A12";

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function getSeatNumber(){
            return $this->seatNumber;
        }

        public function setSeatNumber($seatNumber){
            $this->seatNumber = $seatNumber;
        }
    }



    $j = new Passenger;

    echo $j->getName();
    echo "<br><br>";
    echo $j->getAge();
    echo "<br><br>";
    echo$j->getSeatNumber();
    echo "<br><br>";
    $j->setSeatNumber('10c');
    echo "<br><br>";
    echo $j->getSeatNumber();
    echo "<br><br>";

