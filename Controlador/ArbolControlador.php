<?php
require_once __DIR__ . '/../Modelo/ArbolModelo.php';

class ArbolControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new ArbolModelo();
    }

    public function procesarArbol($preorden, $inorden) {
        $pre = array_map('trim', explode(",", $preorden));
        $in = array_map('trim', explode(",", $inorden));

        $raiz = $this->modelo->construirDesdePreIn($pre, $in);

        $resultado = [];
        $resultado['preorden'] = $this->modelo->preorden($raiz);
        $resultado['inorden'] = $this->modelo->inorden($raiz);
        $resultado['postorden'] = $this->modelo->postorden($raiz);

        return $resultado;
    }
}
?>
