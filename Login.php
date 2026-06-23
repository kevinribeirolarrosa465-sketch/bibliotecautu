<?php
session_start();

$usuario_correcto = "Kevin";
$contrasena_correcta = "12345678";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["logueado"] = true;

        header("Location: Index.php");
        exit();
    } else {
        $mensaje = "Usuario o contraseña incorrectos, inténtalo de nuevo";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    <?php if ($mensaje): ?>
        <p style="color:red;"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="contrasena" required><br><br>

        <button type="submit">Ingresar</button>
    </form>
</body>
</html>