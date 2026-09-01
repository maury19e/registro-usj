<?php
//ejemplo de arreglos asociativos
$persona =[
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
];

//los mismo en json
/*
{
    "nombre": "Juan",
    "edad": 30,
    "ciudad": "Madrid"
}
*/
$personas =[
    [
    "dni" => "12345678",
    "nombre" => "Juancho",
    "edad" => 30,
    "ciudad" => "Madrid"
    ],
    [
    "dni" => "87654321",
    "nombre" => "María",
    "edad" => 25,
    "ciudad" => "Barcelona"
    ]
];
//lo mismo en json
/*
[
    {
        "nombre": "Juancho",
        "edad": 30,
        "ciudad": "Madrid"
    },
    {
        "nombre": "María",
        "edad": 25,
        "ciudad": "Barcelona"
    }
]
*/

//funcion para agregar un nueva persona al arreglo asociativo
function agregarPersona(array &$personas, array $nuevaPersona) {
    $personas[] = $nuevaPersona;
}

//llamada a la funcion para agregar una nueva persona
agregarPersona($personas, [
    "dni" => "11111111",
    "nombre" => "Pedro",
    "edad" => 28,
    "ciudad" => "Valencia"
]);
//echo "Nombre: " . $persona["nombre"] . "\n"; // Juan
/*foreach ($personas as $pers) {
    echo "Nombre: " . $pers["nombre"] ."\n"; // Juancho, María
    echo "Edad: " . $pers["edad"] ."\n"; // 30, 25
    echo "Ciudad: " . $pers["ciudad"] ."\n"; // Madrid, Barcelona
    echo "-------------------\n";
}*/
//funcion secuencial para buscar una persona por su dni 
function buscarPersonaPorDni(array $personas, string $dni): ?array {
    foreach ($personas as $persona) {
        if ($persona["dni"] === $dni) {
            echo "Persona encontrada:\n";
            echo "Nombre: " . $persona["nombre"] . "\n";
            echo "Edad: " . $persona["edad"] . "\n";
            echo "Ciudad: " . $persona["ciudad"] . "\n";
            return $persona;
        }
    }
    return null;
}
//buscarPersonaPorDni($personas, "87654321");
//funcion binaria para buscar una persona por su dni, primero ordenamos el arreglo por dni
function ordenarPersonasPorDni(array &$personas) {
    usort($personas, function ($a, $b) {
        return strcmp($a["dni"], $b["dni"]);
    });
}
function imprimirPersonas(array $personas) {
    foreach ($personas as $persona) {
        echo "DNI: " . $persona["dni"] . "\n";
        echo "Nombre: " . $persona["nombre"] . "\n";
        echo "Edad: " . $persona["edad"] . "\n";
        echo "Ciudad: " . $persona["ciudad"] . "\n";
        echo "-------------------\n";
    }
}
function buscarPersonaPorDniBinaria(array $personas, string $dni): ?array {
    $izquierda = 0;
    $derecha = count($personas) - 1;

    while ($izquierda <= $derecha) {
        $medio = intdiv($izquierda + $derecha, 2);
        if ($personas[$medio]["dni"] === $dni) {
            echo "Persona encontrada:\n";
            echo "Nombre: " . $personas[$medio]["nombre"] . "\n";
            echo "Edad: " . $personas[$medio]["edad"] . "\n";
            echo "Ciudad: " . $personas[$medio]["ciudad"] . "\n";
            return $personas[$medio];
        } elseif ($personas[$medio]["dni"] < $dni) {
            $izquierda = $medio + 1;
        } else {
            $derecha = $medio - 1;
        }
    }
    return null;
}
imprimirPersonas($personas);
ordenarPersonasPorDni($personas);
echo "Personas ordenadas por DNI:\n";
imprimirPersonas($personas);
buscarPersonaPorDniBinaria($personas, "11111111");