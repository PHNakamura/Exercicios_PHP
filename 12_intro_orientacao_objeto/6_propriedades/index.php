<?php
// Declarando propriedades - PUBLIC

class Car{
    public $rodas = 4;
    public $aro = 20;
    public $cor = 'vermelha';
    public $placa;  //definida vazia de proposito

    function ligar(){
        echo "Vrummm <br>";
    }
}

$ferrari = new Car;

echo $ferrari->aro;
echo "<br>";
echo $ferrari->rodas;
echo "<br>";
echo $ferrari->cor;
echo "<br>";
$ferrari->cor = 'Azul';
//echo "<br>";
echo $ferrari->cor;
echo "<br>";
echo $ferrari->placa;
echo "<br>";
$ferrari->placa = "XYZ";
//echo "<br>";
echo $ferrari->placa;
echo "<br>";


$ferrari->ligar();
echo "<br>";
