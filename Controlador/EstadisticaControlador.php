<?php
require_once __DIR__ . '/../Modelo/EstadisticaModelo.php';

class EstadisticaControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new EstadisticaModelo();
    }

    public function procesarNumeros($numeros) {
        $resultado = [];
        $resultado['promedio'] = $this->modelo->calcularPromedio($numeros);
        $resultado['media'] = $this->modelo->calcularMedia($numeros);
        $resultado['moda'] = $this->modelo->calcularModa($numeros);
        return $resultado;
    }
}
?>
