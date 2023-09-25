<?php

function generarNumeroAleatorio() {
    return rand(1, 100);
}

function imprimirMatriz($matriz) {
    echo "<table border='1'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
$N = 6;

if ($N % 2 != 0 || $N < 6) {
    echo "N debe ser un número par mayor o igual a 6.";
} else {
    $matriz = array_fill(0, $N, array_fill(0, $N, 0));

    // Llenar las dos primeras filas y las dos últimas filas con números aleatorios
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $matriz[$i][$j] = generarNumeroAleatorio();
            $matriz[$N - $i - 1][$j] = generarNumeroAleatorio();
        }
    }

    // Calcular la suma de las dos primeras filas y las dos últimas filas
    $sumaPrimerasFilas = array_sum($matriz[0]) + array_sum($matriz[1]);
    $sumaUltimasFilas = array_sum($matriz[$N - 2]) + array_sum($matriz[$N - 1]);

    // Imprimir la matriz y las sumas
    echo "<h2>Matriz Generada:</h2>";
    imprimirMatriz($matriz);
    echo "<h2>Suma de las 2 primeras filas:</h2>";
    echo $sumaPrimerasFilas;
    echo "<h2>Suma de las 2 últimas filas:</h2>";
    echo $sumaUltimasFilas;
}
?>
