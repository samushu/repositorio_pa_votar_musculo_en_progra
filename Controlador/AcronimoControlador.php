<?php
require_once __DIR__ . '/../Modelo/AcronimoModelo.php';

class AcronomoControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new AcronomoModelo();
    }

    public function procesarFrase($frase) {
        return $this->modelo->generarAcronimo($frase);
    }
}
?>
