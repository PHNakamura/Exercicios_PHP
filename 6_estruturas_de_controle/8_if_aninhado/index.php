<?php 

if(10 > 2)
{
    echo "<br>Entrou no primeiro if<br>";
    
    if("teste" == "teste")
    {
        echo "Entrou no sgundo if<br>";
    }
}


$escopo = 10;
if(10 > 2)
{
    echo "<br>Entrou no primeiro if 2<br>";
    $escopo2 = 20;
    
    if("teste" != "teste")
    {
        echo "Entrou no sgundo if 2<br>";
    }
    else
    {
        echo "Entrou no segundo else 2 <br>";
        echo $escopo."<br>";
        echo " ".$escopo2."<br>";
    }
}


if(10 < 2)
{
    echo "<br>Entrou no primeiro if 3 <br>";
    
    if("teste" != "teste")
    {
        echo "Entrou no sgundo if 3 <br>";
    }
    else
    {
        echo "Entrou no segundo else 3 <br>";
    }
}
else
{
    echo "<br>Entrou no primeir else 3<br>";
}