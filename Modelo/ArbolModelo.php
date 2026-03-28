<?php
class Nodo {
    public $valor;
    public $izq;
    public $der;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

class ArbolModelo {

    // Construir árbol a partir de preorden e inorden
    public function construirDesdePreIn($preorden, $inorden) {
        if (empty($preorden) || empty($inorden)) {
            return null;
        }

        // Primer elemento de preorden es la raíz
        $raizValor = array_shift($preorden);
        $raiz = new Nodo($raizValor);

        // Buscar raíz en inorden
        $indice = array_search($raizValor, $inorden);

        // Particionar inorden
        $inIzq = array_slice($inorden, 0, $indice);
        $inDer = array_slice($inorden, $indice + 1);

        // Particionar preorden según tamaño de inorden izquierdo
        $preIzq = array_slice($preorden, 0, count($inIzq));
        $preDer = array_slice($preorden, count($inIzq));

        // Recursividad
        $raiz->izq = $this->construirDesdePreIn($preIzq, $inIzq);
        $raiz->der = $this->construirDesdePreIn($preDer, $inDer);

        return $raiz;
    }

    // Recorridos para mostrar
    public function preorden($nodo) {
        if ($nodo == null) return [];
        return array_merge([$nodo->valor], $this->preorden($nodo->izq), $this->preorden($nodo->der));
    }

    public function inorden($nodo) {
        if ($nodo == null) return [];
        return array_merge($this->inorden($nodo->izq), [$nodo->valor], $this->inorden($nodo->der));
    }

    public function postorden($nodo) {
        if ($nodo == null) return [];
        return array_merge($this->postorden($nodo->izq), $this->postorden($nodo->der), [$nodo->valor]);
    }
}
?>
