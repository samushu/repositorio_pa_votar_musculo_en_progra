<?php
require_once __DIR__ . '/../Modelo/ConjuntosModelo.php';

class ConjuntosControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new ConjuntosModelo();
    }

    public function procesarConjuntos($A, $B) {
        $resultado = [];
        $resultado['union'] = $this->modelo->union($A, $B);
        $resultado['interseccion'] = $this->modelo->interseccion($A, $B);
        $resultado['A-B'] = $this->modelo->diferencia($A, $B);
        $resultado['B-A'] = $this->modelo->diferencia($B, $A);
        return $resultado;
    }
}
?>
