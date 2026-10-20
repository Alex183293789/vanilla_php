<?php
declare(strict_types=1);

class Ciclo
{
    public string $codCiclo;
    public string $nombre;
    public string $grado;

    public function __construct(string $codCiclo, string $nombre, string $grado)
    {
        $this->codCiclo = $codCiclo;
        $this->nombre   = $nombre;
        $this->grado    = $grado;
    }
}
<?php
  $daw = new Ciclo('DAW', 'Desarrollo de Aplicaciones Web', 'Superior');
  $dam = new Ciclo('DAM', 'Desarrollo de Aplicaciones Multiplataforma', 'Superior');

  echo $daw->nombre;   // Desarrollo de Aplicaciones Web
  echo $dam->codCiclo; // DAM
?>