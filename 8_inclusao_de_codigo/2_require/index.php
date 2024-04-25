<p>Testando</p>

<?php
    require "teste.php";
    //require "arquivoInexistente.php"; // gera fatal error e trava (não executa o codigo daqui para frente)
    //include "arquivoInexistente2.php"; // gera warning mas não trava (e continua executando o codigo daqui para frente)
?>
 <p>Arquivos do include/require</p>

<?php 
    require "arquivos/funcao.php";
?>
