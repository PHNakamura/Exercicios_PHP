<?php 

    if(isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    } else {
        $nome = 'Padrão';
        $idade = 'Padrão';
    }

    // echo "<br>";
    // echo '$nome = $_GET["nome"]: <br>';
    // //echo 'nome:' . $nome = $_GET['nome'] . "<br>";
    // echo "<br>";
    // echo '$idade = $_GET["idade"] <br>';
    // //echo 'idade:' . $idade = $_GET['idade'] . "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";


    echo 'Código PHP <br>';
    echo "<br>";

    echo 'print_r($_GET): <br>';
    print_r($_GET);
    echo "<br>";

    echo "<br>";
    echo "<br>";
    echo "<pre>";
    echo 'print_r array[$_GET]: <br>';
    print_r($_GET);
    echo "</pre>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo 'echo implode(", ", $_GET): <br>';
    echo implode(", ", $_GET);
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // $nome = $_GET['nome'];
    // $idade = $_GET['idade'];

?>


<br>
<p>código HTML</p>
<h1>O seu nome é <?= $nome ?> e você tem <?= $idade ?> anos.</h1>