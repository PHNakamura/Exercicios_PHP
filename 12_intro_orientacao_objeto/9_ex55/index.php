<?php

class Carro{

    public $cor;
    public $ano;
    public $velocidade_Maxima;

    function setVelocidadeMaxima($vel){
        $this->velocidade_Maxima = $vel;
    }


    function getVelocidadeMaxima(){
        echo "A velocidade máxima do carro é: $this->velocidade_Maxima <br>"; 
    }

}

$bmw = new Carro;

$bmw->velocidade_Maxima = "300 km/h";

$bmw->getVelocidadeMaxima();
echo "<br>";

echo "<br>";
$bmw->setVelocidadeMaxima('350 km/h');
echo 'Alterando a velocidade: <br>';
echo '( $bmw->setVelocidadeMaxima("350 km/h") ) <br>';
$bmw->getVelocidadeMaxima();


// -------------------------------------------------------------------------------------------------
// instanciando outro carro

echo "<br>";
$ferrari = new carro;

$ferrari->setVelocidadeMaxima(355);
$ferrari->getVelocidadeMaxima();
var_dump($ferrari);

