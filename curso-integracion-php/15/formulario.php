<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="post">
        <label>Nombre</label>
        <input type="text" name="persona[nombre]">
        <label>email</label>
        <input type="email" name="persona[email]">
        <label>edad</label>
        <input type="number" name="persona[edad]">
        <button>Enviar</button>
    </form>
</body>
</html>