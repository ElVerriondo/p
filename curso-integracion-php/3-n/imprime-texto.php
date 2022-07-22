<?php

$name = "nombre definido";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprime texto y etiquetas con php</title>
</head>
<body>
    
    <?php echo "<b>bruh con php xD</b>"; ?>

    <?= "<p><i>hola esta es otra expreción</i></p>" ?>

    <p>Hola! <?= $name ?></p>

</body>
</html>