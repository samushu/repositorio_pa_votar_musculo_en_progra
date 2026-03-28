<?php
require_once __DIR__ . '/../Modelo/BinarioModelo.php';

class BinarioControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new BinarioModelo();
    }

    public function procesarNumero($num) {
        return $this->modelo->convertirABinario($num);
    }
}
?>
