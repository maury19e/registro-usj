<?php
//ejemplos de una funcion  simple   
function saludar(string $nombre) {
    return "Hola, " . $nombre . "!";
}
//ejemplo de una funcion con parametros opcionales
function calculararea(float $base, ?float $altura = null) {
    if ($altura === null) {
        $altura = $base;
    }
    return $base * $altura;
}

//llamada a funcion saludar
echo saludar("Juan") . "\n";
//llamada a funcion calculararea
echo "Area: " . calculararea(5, 10) . "\n";
//llamaada a funcion calculararea con solo un parametro
echo "Area: " . calculararea(4) . "\n";