<?php 

    $arr = [35, 40, 45];
    $key = array_rand($arr);
    $vel = $arr[$key];
    $lim = 40;

    echo "<br>";
    echo 'var_dump no array[$arr] :';
    var_dump($arr);
    echo "<br><br>";

    //echo "Vocês está a: ".$vel."km/h";
    if($vel < $lim)
    {
        echo "Vocês está a: ".$vel."km/h";
        echo "<br>Você está na velocidade correta<br>";
    }
    else if($vel == $lim)
    {
        echo "Vocês está a: ".$vel."km/h";
        echo "<br>Tome cuidado você está no limite da velocidade permitida<br>";
    }
    else
    {
        echo "Vocês está a: ".$vel."km/h";
        echo "<br>Você será multado pois ulrapassou o limite de velocidade<br>";
    }


