<?php 
    $n = 0;

    if(10 > 5)
    {
        $n += 1;
        echo "Entrou no if $n<br>";
    }
    else if(10 > 6) // Não vai entrar no else if porque a primeira condição foi satisfeita
    {
        $n += 1;
        echo "Entrou no else if $n<br>";
    }


    if(10 < 5)
    {
        $n += 1;
        echo "<br>Entrou no if $n<br>";
    }
    else if(10 > 6) // Não vai entrar no else if porque a primeira condição foi satisfeita
    {
        $n += 1;
        echo "<br>Entrou no else if $n<br>";
    }


    if(10 < 5)
    {
        $n += 1;
        echo "<br>Entrou no if $n<br>";
    }
    else if(10 < 6) // Não vai entrar no else if porque a primeira condição foi satisfeita
    {
        $n += 1;
        echo "<br>Entrou no else if $n<br>";
    }
    else
    {
        $n += 1;
        echo "<br>Entrou no else $n<br>";
    }


    if(10 < 5)
    {
        $n += 1;
        echo "<br>Entrou no if $n<br>";
    }
    else if(10 < 6) // Não vai entrar no else if porque a primeira condição foi satisfeita
    {
        $n += 1;
        echo "<br>Entrou no primeiro else if $n<br>";
    }
    else if(11 > 1)
    {
        $n += 1;
        echo "<br>Entrou no segundo else if $n<br>";
    }
    else
    {
        $n += 1;
        echo "<br>Entrou no else $n<br>";
    }


    $a = 10;
    $b = 5;
    $msg = "Entrou no if";

    if($a > $b)
    {
        $n += 1;
        echo "<br>$msg $n<br>";
    }
    else if(10 < 6) // Não vai entrar no else if porque a primeira condição foi satisfeita
    {
        $n += 1;
        echo "<br>Entrou no primeiro else if $n<br>";
    }
    else if(11 > 1)
    {
        $n += 1;
        echo "<br>Entrou no segundo else if $n<br>";
    }
    else
    {
        $n += 1;
        echo "<br>Entrou no else $n<br>";
    }