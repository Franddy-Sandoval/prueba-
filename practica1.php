<?php

// 1. Suma de elementos
function calcularSuma($numeros) {
    $total = 0;
    foreach ($numeros as $valor) {
        echo $valor, "+";
        $total += $valor;
    }
    return $total;
}

// 2. Producto de elementos
function calcularProducto($numeros) {
    $resultado = 1;
    foreach ($numeros as $valor) {
        echo $valor, "*";
        $resultado *= $valor;
    }
    return $resultado;
}

// 3. Mayor valor
function encontrarMayorValor($numeros) {
    return max($numeros);
}

// 4. Contar letras mayúsculas y minúsculas
function analizarTexto($texto) {
    $mayus = 0;
    $minus = 0;

    // Recorrer cada carácter del texto
    for ($indice = 0; $indice < strlen($texto); $indice++) {
        if (ctype_upper($texto[$indice])) {
            $mayus++;
        } elseif (ctype_lower($texto[$indice])) {
            $minus++;
        }
    }

    echo "Mayúsculas: $mayus, Minúsculas: $minus\n";
}

// 5. Cálculo del factorial
function obtenerFactorial($valor) {
    if ($valor === 0) {
        return 1;
    }
    return $valor * obtenerFactorial($valor - 1);
}

// 6. Área de un círculo
function calcularAreaDeCirculo($dimension) {
    $constantePi = 3.14159;
    return $constantePi * pow($dimension, 2);
}

// 7. Leer archivo
function leerArchivo($ruta) {
    if (file_exists($ruta)) {
        $contenidoArchivo = file_get_contents($ruta);
        echo $contenidoArchivo;
    } else {
        echo "Archivo no encontrado.\n";
    }
}

// EJEMPLOS DE USO

// 1. Suma de elementos
$valores = [1, 2, 3, 4];
echo "Suma total: ", calcularSuma($valores), "<br>";

// 2. Producto de elementos
$valoresMultiplicar = [5, 5];
echo "Producto total: " . calcularProducto($valoresMultiplicar), "<br>";

// 3. Mayor valor
echo "Mayor valor: " . encontrarMayorValor($valores) . "<br>";

// 4. Contar letras mayúsculas y minúsculas
$textoPrueba = "Hola Mundo";
analizarTexto($textoPrueba);

// 5. Cálculo del factorial
$valorFactorial = 5;
echo "Factorial de $valorFactorial: " . obtenerFactorial($valorFactorial) . "<br>";

// 6. Área de un círculo
$radioCirculo = 3;
echo "Área del círculo con radio $radioCirculo: " . calcularAreaDeCirculo($radioCirculo) . "<br>";

// 7. Leer archivo
$nombreDeArchivo = "ejemplo.txt";
echo "Contenido del archivo:\n ";
leerArchivo($nombreDeArchivo);

?>



