<?php

$textoHtml = "<p>Testando parágrafo.</p> <div>Uma div.</div> <p>Outro parágrafo.</p>";
echo $textoHtml;
echo "<br>----------------------------------------------------------<br>";

$salvarTextBanco = strip_tags($textoHtml);
echo $salvarTextBanco;
