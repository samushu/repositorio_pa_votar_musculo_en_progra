<?php
class MatematicasModelo {

    // Genera sucesión de Fibonacci hasta n términos
    public function generarFibonacci($num) {
        $serie = [];
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $num; $i++) {
            $serie[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return $serie;
    }

    // Calcular factorial de un número
    public function calcularFactorial($num) {
        $resultado = 1;
        for ($i = 1; $i <= $num; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
}
?>
