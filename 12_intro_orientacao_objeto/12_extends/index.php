<?php
// herança - EXTENDS
// a classe filha herda da classe pai todos os objetos e métodos existentes

class Humano{
    public $idade = 29;

    public function falar(){
        echo "Olá mundo!<br>";
    }

    private function gritar(){
        echo "PHP É MUITO BOM <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixo(){
        echo "lalala!<br>";
    }

    public function acessarFalarBaixo(){
        $this->falarBaixo();
    }


}

class Programador extends Humano{

    public function acessarFalarBaixoProgramador(){
        $this->falarBaixo();
    }

}


$ze = new Humano;
$ze->falar();
//$ze->gritar(); // é private
$ze->acessarGritar();
//$ze->falarBaixo(); //é protected
$ze->acessarFalarBaixo();
//$ze->acessarFalarBaixoProgramador();  //duvida a classe flha acessa metodos/obj da clsse pai e o contrario?parecQÑ
echo "<br>";
echo "<br>";

$eu = new Programador;
$eu->falar();
//$eu->gritar(); //é private
$eu->acessarGritar();
//$eu->falarBaixo(); // é protected
$eu->acessarFalarBaixo();
echo "<br>";
$eu->acessarFalarBaixoProgramador();
echo "<br>";

