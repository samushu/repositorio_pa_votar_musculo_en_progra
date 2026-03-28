<?php
require_once __DIR__ . '/../Controlador/BinarioControlador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["num"]);
    $controlador = new BinarioControlador();
    $resultado = $controlador->procesarNumero($num);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión a Binario</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Conversión de número entero a binario</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="num">Ingrese un número entero:</label>
            <input type="number" id="num" name="num" required>
            <button type="submit">Convertir</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Resultado en binario:</h2>
            <p><?php echo $resultado; ?></p>
        <?php endif; ?>
    </main>
    
    <div class="volver">
    <a href="index.php" class="boton-volver">Volver al menú principal</a>
</div>

    <footer>
        <p><a href="index.php">Volver al menú principal</a></p>
    </footer>
</body>
</html>

