<?php
require_once __DIR__ . '/../Modelo/MatematicasModelo.php';

class MatematicasControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new MatematicasModelo();
    }

    public function procesarOperacion($num, $operacion) {
        if ($operacion == "fibonacci") {
            return $this->modelo->generarFibonacci($num);
        } elseif ($operacion == "factorial") {
            return $this->modelo->calcularFactorial($num);
        } else {
            return "Operación no válida";
        }
    }
}
?>
