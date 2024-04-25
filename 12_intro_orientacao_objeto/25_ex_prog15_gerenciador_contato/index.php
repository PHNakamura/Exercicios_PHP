<?php
// Seção 12: Introdução a Orientação a Objetos
// Exercício de programação 15: Gerenciador de Conatos;
// 1- Crie uma classe chamada [Contact] que represente um contato.
// 2- A classe [Contact] deve ter os seguintes atributos:
//    2a- [name]: Nome do contato.
//    2b- [email]: Endereço de e-mail do contato.
//    2c- [phone]: Número de telefone do contato.
// 3- A classe [Contact] deve ter os seguintes métodos:
//    3a- [getName()]: Retorna o nome do contato.
//    3b- [getEmail()]: Retorna o endereço de e-mail do contato.
//    3c- [getPhone()]: Retorna o número de telefone do conato.
//    3d- [setEmail($email)]: Atuaiza o endereço de e-mail do contato.
//    3e- [(setPhote($phone))]: Atualiza o número de telefone do contato.
// Dicas:
// Lembre-se de incluir a declaração da classe com [class Contact].
// Utlize uma propriedade para cada atributo da classe.
// Os métodos [getName()], [getEmail()] e [getPhone()] devem retornar os respectivos valores das propriedades.
// Os métodos [setEmail($emil)], e [setPhone($phone)] devem atualizar os valores das propriedades correspondentes.


    class Contact{

        public $name = "Abgail";            //"João";
        public $email = "ab@gail.com";      //"joao@example.com";
        public $phone = "123-456";          //"123456789";

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPhone(){
            return $this->phone;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }
    }

    $p = new Contact;
    echo $p->getName();
    echo "<br><br>";
    echo $p->getEmail();
    echo "<br><br>";
    echo $p->getPhone();
    echo "<br><br>";
    $p->setEmail("ab1@gail.com");
    echo $p->getEmail();
    echo "<br><br>";
    $p->setPhone("1234-5678");
    echo $p->getPhone();
    echo "<br><br>";

    