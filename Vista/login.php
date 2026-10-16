<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <form action="Controlador/logincontroller.php" method="post">
        <p>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </p>

        <p>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>

    <p>Si no tienes cuenta...</p>
    <a href="registro.php">Regístrate</a>
</body>
</html>
