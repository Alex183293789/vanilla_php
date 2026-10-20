<?php
function sumar($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

function media($numeros) {
    return sumar($numeros) / count($numeros);
}

while ($linea = fgets(STDIN)) {
    $datos = explode(" ", trim($linea));
    $operacion = $datos[0];

    $numeros = [];
    for ($i = 1; $i < count($datos); $i++) {
        $numeros[] = $datos[$i];
    }

    if (count($numeros) < 2) {
        echo "<p>(Error) No dispongo de suficientes argumentos.</p>" . "\n";
    } elseif ($operacion == "suma") {
        echo "<p>La suma de los números es: " . sumar($numeros). "</p>" . "\n";
    } elseif ($operacion == "media") {
        echo "<p>La media de los números es: " . media($numeros). "</p>" . "\n";
    } else {
        echo "<p>(Error) Operación no permitida</p>" . "\n";
    }
}
?>