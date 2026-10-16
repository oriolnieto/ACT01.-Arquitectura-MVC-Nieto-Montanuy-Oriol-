<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Registro de usuario</h1>

    <form action="../Controlador/usuariocontroller.php" method="post">
        <p>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
        </p>

        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </p>

        <p>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </p>

        <p>
            <label for="rol">Rol:</label>
            <select id="rol" name="rol" required>
                <option value="">Selecciona un rol</option>
                <option value="usuario">Usuario</option>
                <option value="administrador">Administrador</option>
            </select>
        </p>

        <p>
            <button type="submit">Registrarse</button>
        </p>
    </form>

    <p>Si ya tienes cuenta...</p>
    <a href="login.php">Inicia sesión</a>
</body>
</html>