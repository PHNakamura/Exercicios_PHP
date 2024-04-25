<?php

// Arquivo de conexão com o banco de dados (mySQL)

$db = "daotest";
$host = "localhost";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);