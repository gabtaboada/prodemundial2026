<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperación de contraseña</title>
</head>
<body>
    <p>Hola!</p>
    <p>Recibiste este mail porque solicitaste restablecer la contraseña de tu cuenta en el Prode Mundial 2026.</p>
    <p><a href="{{ $url }}">Hacer click aquí para restablecer la contraseña</a></p>
    <p>Este link expirará en 60 minutos.</p>
    <p>Si no solicitaste el cambio de contraseña, ignorá este mensaje.</p>
    <p>Saludos,<br>Prode Mundial 2026</p>
    <p>Si tenés problemas con el botón, copiá y pegá este link en tu navegador: {{ $url }}</p>
</body>
</html>
