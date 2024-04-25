<?php
//public - protected - private
// public - propriedade ou metodo pode ser acessad de qualquer forma;
// protectes - propriedade ou metodo pode ser acessada apenas pela classe de origem ou as que recebem a mesma herança
// private - a propriedade ou metodo pode ser acessada apenas pela classe que a originou

class Car{

    public $rodas = 4;
    //public $vidros = "sem pelicula"; // comentando porque agora a variável $vidro será private e proected
    private $vidros = "sem pelicula";
    protected $portas = 4;

    // para se acessar os valores da variável $vidro somente criadno metodos dentre desta classe
    function getVidros(){
       return $this->vidros;
    }
    
    public function getPortas(){
        return $this->portas;
    }
    
}


class Mecanico{
    
    public function alterarRodas($carro){
        $carro->rodas = 10;
    }

    //Este metodos não funciona mais porque a visibiliade/acesso foi alterado de public para private
    public function colocarPelicula($carro, $pelicula){
        $carro->vidros = $pelicula;
    } 

}


$carro = new Car;

echo $carro->rodas ."<br>"; //objeto como foi instanciado


$fulano = new Mecanico;

$fulano->alterarRodas($carro); //metodo altera o objeto instanciado anteriormente
echo $carro->rodas;
echo "<br>";

// comentando este bloco porque agora a variavel $vidro vai passar a ser protected e depois private
//$fulano->colocarPelicula($carro, "G20"); //metodo altera o objeto instanciado anteriormente
//echo $carro->vidros;

echo "<br>";
echo $carro->getVidros();
echo "<br>";
echo "<br>";
echo $carro->getPortas();
echo "<br>";
