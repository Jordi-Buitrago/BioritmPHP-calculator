

<?php
$data = $_POST["data"];
$nom = $_POST["nom"];

class Biorritme {
  // Properties
  private $nom;
  private $diferencia;
  private $fisic;
  private $emocional;
  private $intellectual;
  private $porcentaje = '%';



  public function __construct($data, $name){

    $dataNow = new DateTime();
    $dataUser = new DateTime ($data);
    $this->diferencia = $dataUser->diff($dataNow)->days;
    $this->nom = $name;

  }

  private function formula($ciclo){
    return round(sin(2 * pi() * ($this->diferencia / $ciclo)), 2) * 100 . $this->porcentaje;
  }

  // Methods
  function calcularBio() {
 
    $fisic = 23;
    $emocional = 28;
    $intellectual = 33;

    $fisic = $this->formula($fisic);
    $emocional = $this->formula($emocional);
    $intellectual = $this->formula($intellectual);

    echo "Hola " . $this->nom . " els teus biorritmes són: <br>";
    echo "Físic: " . $fisic . "<br>";
    echo "Emocional: " . $emocional . "<br>";
    echo "Intellectual: " . $intellectual . "<br>";


  }
  function mostrarBioritme() {
    return $this->nom;
  }

  public function mostrarDatos(){
    echo "Nom: ".$this->nom;
    echo "<br>Diferencia: ".$this->diferencia;
  }
}

$biorritme = new Biorritme($data, $nom);

$biorritme->mostrarDatos();
$biorritme->calcularBio();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="progress">
    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="<?php width($fisic)?>";  aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress">
    <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="<?php width($fisic)?>" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress">
    <div class="progress-bar bg-warning" role="progressbar" aria-label="Warning example" style="width: " aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <div class="progress">
    <div class="progress-bar bg-danger" role="progressbar" aria-label="Danger example" style="width: <?php $fisic ?>" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</body>
