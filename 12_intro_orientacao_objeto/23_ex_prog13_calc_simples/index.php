<?php
// Seção 12: Introdução a Orientação a Objetos
// Exercício de programação 13: Calculadora simples
// 1- Crie uma classe chamada [CALCULADORA] que tenha os seguintes métodos:
//  1a- [somar(a,b)]: recebe dois números como parametros e retorna a soma deles.
//  2a- [subtrair(a,b)]: recebe dois números como parametros e retorna a subtração do segundo num pelo primeiro
//  3a- [multiplicar(a,b)]: recebe dois números como parametros e retorna a multiplicação deles
//  4a- [dividir(a,b)]: recebe dois números como paramentros e retorna a divisão primeiro num pelo segundo
// Dicas:
// Lembre-se de incluir a declaração da classe com [class Caculadora].


    class Calculadora{
        public $a;
        public $b;

                // Faria assim se os métodos, a serem criados, fossem passados SEM argumentos(parametros)
                // mas como o enunciado do exercicio pediu que fosse passado os dois numeros... Mudar a logica
                // function setA($a){
                //     if(is_numeric($a)):
                //         return $this->a = $a;
                //     else:
                //         echo "Digite apenas valores numéricos. <br>";
                //     endif;
                // }

                // function setB($b){
                //     if(is_numeric($b)):
                //         return $this->b = $b;
                //     else:
                //         echo "Digite apenas valores numéricos. <br>";
                //     endif;
                // }

        function somar($a, $b){
            if(is_numeric($a) && (is_numeric($b))):
                $this->a = $a;
                $this->b = $b;
                return $this->a + $this->b;
            else:
                echo "Digite apenas valores numérios. <br>";
            endif;
        }

        function subtrair($a, $b){
            if(is_numeric($a) && (is_numeric($b))):
                $this->a = $a;
                $this->b = $b;
                return $this->a - $this->b;
            else:
                echo "Digite apenas valores numérios. <br>";
            endif;
        }


        function multiplicar($a, $b){
            if(is_numeric($a) && (is_numeric($b))):
                $this->a = $a;
                $this->b = $b;
                return $this->a * $this->b;
            else:
                echo "Digite apenas valores numérios. <br>";
            endif;
        }


        function dividir($a, $b){
            if(is_numeric($a) && (is_numeric($b))):
                $this->a = $a;
                if($b === 0):
                    echo "O segundo valor deve ser apenas um número não nulo. <br>";
                else:
                    $this->b = $b;
                endif;
                return $this->a / $this->b;
            else:
                echo "Digite apenas valores numérios. <br>";
            endif;
        }

    }
    $conta = new Calculadora;
    echo "O resultado da soma é: ". $conta->somar(1, 9) . "<br>";
    echo "<br>";
    echo "O resultado da subtração é: ". $conta->subtrair(1, 9) . "<br>";
    echo "<br>";
    echo "O resultado da multiplicação é: ". $conta->multiplicar(1, 9) . "<br>";
    echo "<br>";
    echo "O resultado da divisão é: ". $conta->dividir(1, 0.5) . "<br>";
    echo "<br>";
