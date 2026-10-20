

 <?php
   $codCiclo  = "DAW";     // string
   $horas     = int 2000;      // int
   $notaCorte = 8.75;      // float
   $activo    = true;      // bool

   echo '<p>', $codCiclo, ' — ', $horas, ' horas — nota de corte ', $notaCorte, '</p>';

   echo '<pre>';
   var_dump($codCiclo, $horas, $notaCorte, $activo);
   echo '</pre>';
 ?>
 <?php
   $horasTotales  = 2000;
   $horasCursadas = 1350;
   echo '<p>Horas restantes: ', $horasTotales - $horasCursadas, '</p>';

   $codCiclo = "10";   // string
   $idCiclo  = 10;     // int

   echo '<pre>';
   var_dump($codCiclo === $idCiclo);    // ¿qué esperas?
   var_dump($codCiclo === $idCiclo);   // ¿y aquí?
   echo '</pre>';
 ?>