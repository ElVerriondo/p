<?php 

$usuarios = array(
    array(
        "id" => 0,
        "username" => "olafo"
    ),

    array(
        "id" => 1,
        "username" => "elSebas"
    ),

    array(
        "id" => 2,
        "username" => "panchoVilla"
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de php a javascript</title>
</head>
<body>

<p id="test"></p>

<script>

function getId(id){
    return document.getElementById(id);
}

let mostrar = getId("test"); 

let users = JSON.parse('<?= json_encode($usuarios) ?>');

console.log(users);

</script>
</body>
</html>