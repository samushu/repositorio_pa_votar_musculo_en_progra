<?php
require_once __DIR__ . '/../Controlador/ConjuntosControlador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entradaA = $_POST["conjuntoA"];
    $entradaB = $_POST["conjuntoB"];

    $A = array_map('intval', explode(",", $entradaA));
    $B = array_map('intval', explode(",", $entradaB));

    $controlador = new ConjuntosControlador();
    $resultado = $controlador->procesarConjuntos($A, $B);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones con Conjuntos</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Operaciones con Conjuntos A y B</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="conjuntoA">Conjunto A (números separados por comas):</label>
            <input type="text" id="conjuntoA" name="conjuntoA" placeholder="Ej: 1,2,3,4" required>

            <label for="conjuntoB">Conjunto B (números separados por comas):</label>
            <input type="text" id="conjuntoB" name="conjuntoB" placeholder="Ej: 3,4,5,6" required>

            <button type="submit">Calcular</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Resultados:</h2>
            <p><strong>Unión:</strong> <?php echo implode(", ", $resultado['union']); ?></p>
            <p><strong>Intersección:</strong> <?php echo implode(", ", $resultado['interseccion']); ?></p>
            <p><strong>A - B:</strong> <?php echo implode(", ", $resultado['A-B']); ?></p>
            <p><strong>B - A:</strong> <?php echo implode(", ", $resultado['B-A']); ?></p>
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
