<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
</head>
<body>
    <h1>Mi perfil</h1>

    <form action="../Controlador/usuariocontroller.php" method="post">
        <p>
            <label for="usuario">Usuario:</label>
            <input
                type="text"
                id="usuario"
                name="usuario"
                value="<?php echo htmlspecialchars($usuario ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                readonly
            >
        </p>

        <p>
            <label for="nombre">Nombre:</label>
            <input
                type="text"
                id="nombre"
                name="nombre"
                value="<?php echo htmlspecialchars($nombre ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                readonly
            >
        </p>

        <p>
            <label for="apellidos">Apellidos:</label>
            <input
                type="text"
                id="apellidos"
                name="apellidos"
                value="<?php echo htmlspecialchars($apellidos ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                readonly
            >
        </p>

        <p>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?php echo htmlspecialchars($email ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                required
            >
        </p>

        <input type="hidden" name="accion" value="actualizar_email">

        <p>
            <button type="submit">Guardar email</button>
        </p>
    </form>

    <p>
        <a href="login.php">Cerrar sesión</a>
    </p>
</body>
</html>