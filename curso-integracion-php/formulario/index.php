<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">

        <div class="alert danger">Algo salió mal</div>
        <div class="alert sucsses">Éxito al enviar el formulario</div>

        <div class="form-container">
            <form action="#">
                <h1>Contactanos!</h1>

                <div class="input-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="input-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="input-group">
                    <label for="subject">Asunto:</label>
                    <input type="text" name="subject" id="subject">
                </div>

                <div class="input-group">
                    <label for="message">Mensaje:</label>
                    <textarea name="message" id="message"></textarea>
                </div>

                <button type="submit" class="btn">Enviar</button>

            </form>
        </div>
        
    </div>
</body>
</html>