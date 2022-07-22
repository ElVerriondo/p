<?php

$users = ['michigan', 'cosaxs', 'fredo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($x = 0; $x < 10; $x++): ?>
        <p><?= $x ?></p>
    <?php endfor; ?>

    <?php while(false): ?>
        <li>Cualquier Cosa</li>
    <?php endwhile ?>

    <?php foreach($users as $user): ?>
        <div>Nombre de usuario:<b><?= $user ?></b></div>
    <?php endforeach ?>

</body>
</html>