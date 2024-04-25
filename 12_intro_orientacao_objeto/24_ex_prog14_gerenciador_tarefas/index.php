<?php
// Seção 12: Introdução a Orientação a Objetos
// Exercício de programação 14: Gerenciador de tarefas
// 1- Crie uma classe chamada [Task] que represente uma terafa.
// 2- A classe [Task] deve conter os seguintes atributos:
//      2a- [title]: Título da tarefa;
//      2b- [description]: Descrição da tarefa;
//      2c- [completed]: Indica se a tarefa está concluída ou não.
// 3- A classe [Task] deve conter os seguintes métodos:
//      3a- [markAsCompleted()]: marca a tarefa como concluída.
//      3b- [markAsIncomplete()]: marcaa tarefa como NÃO concluída.
//      3b- [getTitle()]: retorna o título da tarefa.
//      3c- [getDescription()]: retorna a descrição da tarefa.
//      3d- [isCompleted()]: retorna um booleano indicando se a tarefa está concluída ou não.
// Dicas:
// Lembre-se de incluir a delaração da classe com [class Task].
// Utilize uma propriedade para cada atributo da classe.
// Os métodos [markAsCompleted()] e [markAsIncompleted] podem simplesmente alterar o valor da propriedade [completed]
// Os métodos [getTitle()], [getDescription()] e [isCompleted()] devem retornar os respectivos valores das propriedades.


    class Task{

        public $title;
        public $description;
        public $completed;

        public function markAsCompleted($aux){
            if(is_bool($aux)){
                return $this->completed = $aux;
            }
            else {
                echo "Por favor digite apenas TRUE se a tarefa foi concluída; <br>ou<br> FALSE se a tarefa não foi concuída. <br>";
            }
        }

        public function markAsIncomplete($aux){
            if(is_bool($aux)){
                return $this->completed = $aux;
            }
            else {
                echo "Por favor digite apenas TRUE se a tarefa foi concluída; <br>ou<br> FALSE se a tarefa não foi concuída. <br>";
            }
        }



        public function setTitle($aux){
            $this->title = $aux;
        }

        public function getTitle(){
            return $this->title;
        }


        public function setDescription($aux){
            $this->description = $aux;
        }

        public function getDescription(){
            return $this->description;
        }

        public function isCompleted(){
            return $this->completed === true ? "Tarefa concluída! <br>" : "Tarefa NÃO concluída... <br>";
            //echo ($this->completed === true ? "Tarefa concluída! <br>" : "Tarefa NÃO concluída... <br>");
            // if($this->completed === true){
            //     echo "Tarefa concluída. <br>";
            // }
            // else {
            //     echo "Tarefa NÃO concluída. <br>";
            // }
        }


    }


    $t = new Task;
    $t->setTitle('compras');
    $t->setDescription('fazer compras do mês(arroz, feijão, óleo, sal, café, frutas, carne, manteiga)') ;
    $t->markAsCompleted(true);
    echo $t->getTitle();
    echo "<br>";
    echo $t->getDescription();
    echo "<br>";
    echo $t->isCompleted();
    echo "<br>";
