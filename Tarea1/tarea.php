<?php
// archivo tarea.php: Celso Aguirre - UNIANDES - 01/08/2024

// a. Declaración de Variables:
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "Hola, Mundo";
$booleanVar = true;
$arrayVar = array("manzana", "banana", "cereza", "fresa", "higo");

// b. Operaciones Aritméticas:
$sum = $integerVar + $floatVar;
$product = $integerVar * $floatVar;

echo "La suma de $integerVar y $floatVar es: $sum<br>";
echo "El producto de $integerVar y $floatVar es: $product<br>";

// c. Manipulación de Cadenas:
$string1 = "Hola";
$string2 = "Mundo";
$concatenatedString = $string1 . ", " . $string2;
$stringLength = strlen($concatenatedString);

echo "La cadena concatenada es: $concatenatedString<br>";
echo "La longitud de la cadena concatenada es: $stringLength<br>";

// d. Uso de Condicionales:
if ($booleanVar) {
    echo "La variable booleana es verdadera.<br>";
} else {
    echo "La variable booleana es falsa.<br>";
}

// e. Creación de un Array:
echo "El segundo elemento del arreglo es: " . $arrayVar[1] . "<br>";
?>
