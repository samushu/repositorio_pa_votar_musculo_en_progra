<?php
require_once __DIR__ . '/../Controlador/AcronimoControlador.php';

$resultado = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST["frase"];
    $controlador = new AcronomoControlador();
    $resultado = $controlador->procesarFrase($frase);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acrónimo</title>
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
    <header>
        <h1>Convertir frase en acrónimo</h1>
    </header>

    <main>
        <form method="POST" action="">
            <label for="frase">Ingrese la frase:</label>
            <input type="text" id="frase" name="frase" required>
            <button type="submit">Generar Acrónimo</button>
        </form>

        <?php if (!empty($resultado)): ?>
            <h2>Resultado: <?php echo $resultado; ?></h2>
        <?php endif; ?>
    </main>

    <footer>
        <p><a href="index.php">Volver al menú principal</a></p>
    </footer>
</body>
</html>
