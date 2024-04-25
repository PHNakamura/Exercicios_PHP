<?php
    $nome = "Acer";
?>

<?= $teste = "asd";?>  <!-- não serve para lógica de programação. É apenas um recurso para exibir na tela do usuario dados que geralmente vem do back-end. -->

<form action="">
    <div>
        <input type="text" value="">
        <!-- <input type="text" value="<?php echo $nome; ?>"> -->
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<form action="">
    <div>
        <!-- <input type="text" value=""> -->
        <input type="text" value="<?php echo $nome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<form action="">
    <div>
        <!-- <input type="text" value=""> -->
        <!-- <input type="text" value="<?php echo $nome; ?>"> -->
        <input type="text" value="<?= $nome; ?>">

    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
