<?php

if(isset($_FILES)){
    print_r($_FILES);

    echo "<br>";
    echo "<br>";
    echo '<pre>';
    echo 'array[$_FILES]: <br>';
    print_r($_FILES);
    echo '</pre>';
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" name="imagem">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>
