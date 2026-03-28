<?php
class CalculadoraModelo {

    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    public function multiplicar($a, $b) {
        return $a * $b;
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            return "Error: división por cero";
        }
        return $a / $b;
    }

    public function porcentaje($a, $b) {
        return ($a * $b) / 100;
    }
}
?>
