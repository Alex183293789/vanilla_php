<?php
  const NOMBRE_CENTRO = 'CIFP Carlos III';
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW'];
  echo $curriculo['alumno'];   // Ana López
   $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];

  echo $curriculos[0]['alumno'];   // Ana López
  
  function mostrarCurriculo(array $curriculo) {
    echo '<li>', $curriculo['alumno'], ' — ', $curriculo['ciclo'],
         ' — <a href="', $curriculo['video'], '">vídeo</a></li>';
  }
   echo '<h1>', NOMBRE_CENTRO, ' — Currículos</h1>';
  echo '<ul>';
  mostrarCurriculo($curriculos[0]);
  mostrarCurriculo($curriculos[1]);
  mostrarCurriculo($curriculos[2]);
  echo '</ul>';
 echo '<h1>', NOMBRE_CENTRO, ' — Currículos</h1>';
  echo '<ul>';
foreach ($curriculos as $value) {
    echo mostrarCurriculo($value);
}

  echo '</ul>';
?>
  
