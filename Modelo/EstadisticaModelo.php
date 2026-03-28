<?php
class EstadisticaModelo {

    // Promedio
    public function calcularPromedio($numeros) {
        $suma = array_sum($numeros);
        return $suma / count($numeros);
    }

    // Media (mediana)
    public function calcularMedia($numeros) {
        sort($numeros);
        $count = count($numeros);
        $middle = floor($count / 2);

        if ($count % 2) {
            return $numeros[$middle];
        } else {
            return ($numeros[$middle - 1] + $numeros[$middle]) / 2;
        }
    }

    // Moda
    public function calcularModa($numeros) {
        $frecuencias = array_count_values($numeros);
        $maxFrecuencia = max($frecuencias);
        $moda = [];

        foreach ($frecuencias as $num => $freq) {
            if ($freq == $maxFrecuencia) {
                $moda[] = $num;
            }
        }

        return $moda;
    }
}
?>
