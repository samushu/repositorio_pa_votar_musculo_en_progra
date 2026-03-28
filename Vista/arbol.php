<?php
require_once __DIR__ . '/../Controlador/ArbolControlador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preorden = $_POST["preorden"];
    $inorden = $_POST["inorden"];

    $controlador = new ArbolControlador();
    $resultado = $controlador->procesarArbol($preorden, $inorden);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Árbol Binario</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Construcción de Árbol Binario</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="preorden">Preorden (ej: A,B,D,E,C):</label>
            <input type="text" id="preorden" name="preorden" required>

            <label for="inorden">Inorden (ej: D,B,E,A,C):</label>
            <input type="text" id="inorden" name="inorden" required>

            <button type="submit">Construir Árbol</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Recorridos del Árbol:</h2>
            <p><strong>Preorden:</strong> <?php echo implode(" -> ", $resultado['preorden']); ?></p>
            <p><strong>Inorden:</strong> <?php echo implode(" -> ", $resultado['inorden']); ?></p>
            <p><strong>Postorden:</strong> <?php echo implode(" -> ", $resultado['postorden']); ?></p>
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
