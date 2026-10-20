<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
 while ($datos[1] < $datos[5]) {
    $datos[1] += $datos[2];
    $datos[2] += $datos[3];
    $datos[3] += $datos[4];
    $datos[4] += $datos[5];
    $datos++;
    
    if ($datos === '0') {
    echo '<p>Los demás valores serán ignorados</p>';
  }
  echo '<p>Se han sumado $datos números, dando como resultado un total de 1</p>'
  }