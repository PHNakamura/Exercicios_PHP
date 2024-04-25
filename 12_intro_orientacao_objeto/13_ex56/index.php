<?php

    class Humano{

        public $nome;
        public $alimento = "sanduiche";
    
        public function falar(){
            echo "Estou falando!<br>";
        }

        public function setAlimentar($comida){
            return $this->alimento = $comida;
        }

        public function getAlimentar(){
            return $this->alimento;
        }

        public function comer(){
            echo "$this->nome se alimentou de $this->alimento. <br>";
        }
        
        public function trocaComida(){
            echo "Agora, $this->nome comerá $this->alimento. <br>";
        }

    }



    class Professor extends Humano{
        
        public $disciplina = 'Truco';
        public $aluno;
        public $nota;

        public function testar(){
            echo "Hoje é dia de prova surpresa!!! <br>";
        }

        public function setNome($nome){
            return $this->nome = $nome;
        }

        public function setAluno($aluno){
            return $this->aluno = $aluno;
        }

        public function setNota($nota){
            return $this->nota = $nota;
        }

        public function avaliar(){
            echo "O aluno $this->aluno do professor $this->nome, tirou a nota $this->nota na prova de $this->disciplina, na faculdade de belas-artes. <br>"; 
        }

    }

$x = new Humano;
$y = new Professor;

echo "<br>";
echo 'Pessoa $x [class Humano]: <br>';
$x->falar();
echo "<br><br>";

echo "<br>";
echo 'Pessoa $y [class Professor extends Humano]: <br>';
$y->falar();
echo "<br><br>";

$y->testar();
echo "<br><br>";

$y->setNome('Yavier');
$y->setAluno("Asd");
$y->setNota(8);

$y->avaliar();
echo "<br><br>";

$y->comer();
$y->setAlimentar("frutas");
$y->trocaComida();
echo "<br><br>";
