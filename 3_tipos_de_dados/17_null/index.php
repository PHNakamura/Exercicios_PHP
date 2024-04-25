<?php 

echo null;

$nome = null;
if(is_null($nome))
{
    echo "<br>O valor é nulo!<br>";
}

$nome = "Matheus";
if(is_null($nome))
{
    echo "<br>O valor é nulo!<br>";
}

$nome = "Beth";
if(!is_null($nome))
{
    echo "<br>O valor NÃO é nulo!<br>";
}
?>