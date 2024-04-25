<?php 

$car1 = 
[
    'marca' => 'VW', 
    'modelo' => 'Gol', 
    'portas' => 4, 
    'cor' => 'cinza'
];

$car2 = ['Ford', 'Ranger', '2 portas', 'prata'];

$car3 = 
[
    'marca' => "BMW",
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => false
];

#echo "<br>";
echo "<pre>";
echo 'print_r no [array $car1]:'."<br>";
print_r($car1);
echo "</pre>";
echo "<br>";

echo "<br>";
echo "[\$car1]: <br>";
echo "Marca: $car1[marca] <br>";
echo "Modelo: $car1[modelo] <br>";
echo "Qde de portas: $$car1[portas] <br>";
echo "Cor: $car1[cor] <br>";
echo "<br>";

echo "<br>";
echo "[array \$car1]: Marca $car1[marca], modelo $car1[modelo], qde de portas $car1[portas], cor $car1[cor]. <br>";

echo "<br>";
echo "<pre>";
echo 'var_dump no [array $car1]'."<br>";
var_dump($car1);
echo "</pre>";
echo "<br>";


echo "<br>";
echo "<pre>";
echo 'print_r no [array $car2]: <br>';
print_r($car2);
echo "</pre>";
echo "<br>";

echo "<br>";
echo '[$car2]: <br>';
echo "Marca: $car2[0] <br>";
echo "Modelo: $car2[1] <br>";
echo "Qde portas: $car2[2] <br>";
echo "Cor: $car2[3] <br>";
echo "<br>";

echo "<br>";
echo "[array \$car2]: Marca: $car2[0], modelo: $car2[1], qde de portas: $car2[2] e cor: $car2[3]. <br>";

echo "<br>";
echo "<pre>";
echo 'var_dump no [array $car2]. <br>';
var_dump($car2);
echo "</pre>";
echo "<br>";


echo "<br>";
echo '[array $car3]: <br>';
print_r($car3);
echo "<br>";

$marca = $car3['marca'];
$velocidade_maxima = $car3['velocidade_max'];

echo "<br>";
echo "O carro é da marca $marca e atinge a velocidade máxima de $velocidade_maxima km/h";
echo "<br>";

echo "<br>";
echo "<pre>";
echo 'var_dump no [array $car3]: <br>';
var_dump($car3);
echo "</pre>";
echo "<br>";
