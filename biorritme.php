

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

  private function formula($cicle){
    return round(sin(2 * pi() * ($this->diferencia / $cicle)), 2) * 100 . $this->porcentaje;
  }

  // Methods
  /*function calcularBio() {
 
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


  }*/

  function calcularFisic() {
    $fisic = 23;
    $fisic = $this->formula($fisic);
    echo $fisic;
  }

  function calcularEmocional() {
    $emocional = 28;
    $emocional = $this->formula($emocional);
    echo $emocional;
  }

  function calcularIntellectual() {
    $intellectual = 33;
    $intellectual = $this->formula($intellectual);
    echo $intellectual;
  }

  
  function mostrarBioritme() {
    return $this->nom;
  }

  public function mostrarDatos(){
    echo "Nom: ".$this->nom;
    echo "<br>Diferencia: ".$this->diferencia. "<br>";
  }
}



$biorritme = new Biorritme($data, $nom);

$biorritme->mostrarDatos();
//$biorritme->calcularBio();
$biorritme->calcularFisic();
$biorritme->calcularEmocional();
$biorritme->calcularIntellectual();

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
<body style="background-color: #000E24">
//center progress bar 
<div class="mt-5 d-flex justify-content-center">
  <div class="progress mb-3 w-50">
      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php $biorritme->calcularFisic(); ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><?php $biorritme->calcularFisic(); ?></div>
    </div>
    <div class="progress mb-3 w-50">
      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php $biorritme->calcularEmocional(); ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php $biorritme->calcularEmocional(); ?></div>
    </div>
    <div class="progress mb-3 w-50">
      <div class="progress-bar progress-bar-striped bg-succes" role="progressbar" style="width: <?php $biorritme->calcularIntellectual(); ?>"aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php $biorritme->calcularIntellectual(); ?></div>
  </div>
</div>
</body>




