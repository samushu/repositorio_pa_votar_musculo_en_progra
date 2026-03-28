<?php
require_once __DIR__ . '/../Controlador/MatematicasControlador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["num"]);
    $operacion = $_POST["operacion"];

    $controlador = new MatematicasControlador();
    $resultado = $controlador->procesarOperacion($num, $operacion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci / Factorial</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Sucesión de Fibonacci o Factorial</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="num">Ingrese un número:</label>
            <input type="number" id="num" name="num" required>

            <label for="operacion">Seleccione operación:</label>
            <select id="operacion" name="operacion" required>
                <option value="fibonacci">Fibonacci</option>
                <option value="factorial">Factorial</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Resultado:</h2>
            <?php 
                if (is_array($resultado)) {
                    echo implode(", ", $resultado);
                } else {
                    echo $resultado;
                }
            ?>
        <?php endif; ?>
    </main>

    <footer>
        <p><a href="index.php">Volver al menú principal</a></p>
    </footer>
</body>
</html>
