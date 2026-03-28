<?php
require_once __DIR__ . '/../Controlador/EstadisticaControlador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST["numeros"];
    $numeros = array_map('floatval', explode(",", $entrada));

    $controlador = new EstadisticaControlador();
    $resultado = $controlador->procesarNumeros($numeros);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadística</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Promedio, Media y Moda</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="numeros">Ingrese números separados por comas:</label>
            <input type="text" id="numeros" name="numeros" placeholder="Ej: 2,4,4,5,7" required>
            <button type="submit">Calcular</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Resultados:</h2>
            <p><strong>Promedio:</strong> <?php echo $resultado['promedio']; ?></p>
            <p><strong>Media:</strong> <?php echo $resultado['media']; ?></p>
            <p><strong>Moda:</strong> <?php echo implode(", ", $resultado['moda']); ?></p>
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
