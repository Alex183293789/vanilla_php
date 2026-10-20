<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));

  switch ($datos) {
    case '+':
      $operacion = ($datos[1] + $datos[2]);
      break;
    case  '-':
      $operacion = ($datos[1] - $datos[2]);
      break;
      case '*':
      $operacion = ($datos[1] * $datos[2]);
      break;
      case ':':
      $operacion = ($datos[1] / $datos[2]);
      break;
  }
  echo "<p>" . $datos[1] . " " . $datos[0] . " " . $datos[2] . " = " . $operacion . "</p>";
?>