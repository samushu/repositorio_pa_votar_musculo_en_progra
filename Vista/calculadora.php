<?php
session_start();
require_once __DIR__ . '/../Controlador/CalculadoraControlador.php';

$controlador = new CalculadoraControlador();
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["borrar"])) {
        $controlador->borrarHistorial();
    } else {
        $a = floatval($_POST["num1"]);
        $b = floatval($_POST["num2"]);
        $operacion = $_POST["operacion"];
        $resultado = $controlador->procesarOperacion($a, $b, $operacion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Calculadora Básica</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="num1">Número 1:</label>
            <input type="number" step="any" id="num1" name="num1" required>

            <label for="num2">Número 2:</label>
            <input type="number" step="any" id="num2" name="num2" required>

            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
                <option value="porcentaje">Porcentaje</option>
            </select>

            <button type="submit">Calcular</button>
            <button type="submit" name="borrar">Borrar Historial</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Resultado: <?php echo $resultado; ?></h2>
        <?php endif; ?>

        <h2>Historial:</h2>
        <ul>
            <?php foreach ($controlador->obtenerHistorial() as $item): ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer>
        <p><a href="index.php">Volver al menú principal</a></p>
    </footer>
</body>
</html>
