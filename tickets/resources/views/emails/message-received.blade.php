<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>¡Hola admin!</p>
    <p>Te saludamos desde el portal Tickets y te informamos que...</p>
    <p><strong>Recibiste un mensaje de:</strong> {{ $msg['name'] }} - <strong>{{ $msg['email'] }}</strong></p>
    <p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
    <p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
</body>
</html>