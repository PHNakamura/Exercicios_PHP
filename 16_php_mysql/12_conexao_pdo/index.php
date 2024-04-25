<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$db",$user, $pass);

if($conn){
    echo "TUDO CONECTADO POR AQUI!!! <br>";
}else{
    echo "Falhou... <br>";
}
