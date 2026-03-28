<?php
require_once __DIR__ . '/../Modelo/CalculadoraModelo.php';

class CalculadoraControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new CalculadoraModelo();
        if (!isset($_SESSION['historial'])) {
            $_SESSION['historial'] = [];
        }
    }

    public function procesarOperacion($a, $b, $operacion) {
        switch ($operacion) {
            case "suma":
                $resultado = $this->modelo->sumar($a, $b);
                break;
            case "resta":
                $resultado = $this->modelo->restar($a, $b);
                break;
            case "multiplicacion":
                $resultado = $this->modelo->multiplicar($a, $b);
                break;
            case "division":
                $resultado = $this->modelo->dividir($a, $b);
                break;
            case "porcentaje":
                $resultado = $this->modelo->porcentaje($a, $b);
                break;
            default:
                $resultado = "Operación no válida";
        }

        // Guardar en historial
        $operacionTexto = "$a $operacion $b = $resultado";
        $_SESSION['historial'][] = $operacionTexto;

        return $resultado;
    }

    public function obtenerHistorial() {
        return $_SESSION['historial'];
    }

    public function borrarHistorial() {
        $_SESSION['historial'] = [];
    }
}
?>
