<?php
class AcronomoModelo {
    public function generarAcronimo($frase) {
        // Eliminar signos de puntuación excepto espacios y guiones
        $frase = preg_replace("/[^a-zA-Z\s-]/", "", $frase);

        // Separar por espacios y guiones
        $palabras = preg_split("/[\s-]+/", $frase);

        // Tomar la primera letra de cada palabra y convertir a mayúscula
        $acronimo = "";
        foreach ($palabras as $palabra) {
            if (!empty($palabra)) {
                $acronimo .= strtoupper($palabra[0]);
            }
        }

        return $acronimo;
    }
}
?>
