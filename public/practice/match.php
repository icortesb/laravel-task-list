<?php

// 1. Sintaxis básica
$variable = 1;
$resultado = match ($variable) {
    1 => 'resultado1',
    2 => 'resultado2',
    3 => 'resultado3',
    default => 'valor por defecto',
};
echo "1. Sintaxis básica: " . $resultado . "\n";  // Salida: resultado1


// 2. Comparación estricta (sin conversión de tipo)
$valor = '5';
$resultado = match ($valor) {
    5 => 'Cinco',       // Coincide solo si $valor es exactamente 5 (como entero)
    '5' => 'Cinco String', // Coincide solo si $valor es el string '5'
    default => 'No coincide',
};
echo "2. Comparación estricta: " . $resultado . "\n";  // Salida: Cinco String


// 3. Asignación directa de valor
$color = 'rojo';
$resultado = match ($color) {
    'rojo' => 'Red',
    'verde' => 'Green',
    'azul' => 'Blue',
    default => 'Color desconocido',
};
echo "3. Asignación directa de valor: " . $resultado . "\n";  // Salida: Red


// 4. Uso de default opcional
$dia = 8;
$resultado = match ($dia) {
    1 => 'Lunes',
    2 => 'Martes',
    default => 'Día inválido',
};
echo "4. Uso de default opcional: " . $resultado . "\n";  // Salida: Día inválido


// 5. Varias condiciones para un solo valor
$edad = 25;
$resultado = match ($edad) {
    18, 19, 20, 21 => 'Joven adulto',
    22, 23, 24 => 'Adulto joven',
    default => 'Edad desconocida',
};
echo "5. Varias condiciones para un solo valor: " . $resultado . "\n";  // Salida: Joven adulto


// 6. Tipos de valores admitidos (booleanos)
$valor = true;
$resultado = match ($valor) {
    true => 'Es verdadero',
    false => 'Es falso',
};
echo "6. Tipos de valores admitidos: " . $resultado . "\n";  // Salida: Es verdadero


// 7. Uso con tipos complejos (arrays)
$array = [1, 2, 3];
$resultado = match ($array) {
    [1, 2, 3] => 'Array correcto',  // Coincide con el array exacto
    default => 'Array incorrecto',
};
echo "7. Uso con tipos complejos (arrays): " . $resultado . "\n";  // Salida: Array correcto


// 8. Lanzar excepciones si no se encuentra coincidencia
$dia = 10;
try {
    $resultado = match ($dia) {
        1 => 'Lunes',
        2 => 'Martes',
    };
} catch (UnhandledMatchError $e) {
    echo "8. Lanzar excepciones: " . 'Error: ' . $e->getMessage() . "\n";  // Salida: Error: Unhandled match value: 10
}


// 9. Uso de `default` para manejar valores no coincidentes
$valor = 'desconocido';
$resultado = match ($valor) {
    'conocido' => 'Valor conocido',
    default => 'Valor por defecto',  // Si no hay coincidencia, usa el valor por defecto
};
echo "9. Uso de `default`: " . $resultado . "\n";  // Salida: Valor por defecto
?>
