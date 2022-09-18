

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

  public function mostrarDif(){
    echo $this->diferencia;
  }
}



$biorritme = new Biorritme($data, $nom);

$biorritme->mostrarDif();
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
  <title>Biorritme</title>
</head>
<body style="background-color: #000E24">

<table class="table table-bordered w-50 mx-auto">
  <tr>
    <th class="text-white">Nom</th>
    <th class="text-info text-center"><?php echo $nom ?></th>
  </tr>
    <tr>
      <th class="text-white">Diferencia de dies</th>
    <th class="text-info text-center"><?php echo $biorritme->mostrarDif() ?></th>
  </tr>
  <tr>
    <td class="text-danger">Fisic</td>
    <td class="text-white text-center"><?php $biorritme->calcularFisic(); ?></td>
  </tr>
  <tr>
    <td class="text-warning">Emocional</td>
    <td class="text-white text-center"><?php $biorritme->calcularEmocional(); ?></td>
  </tr>
  <tr>
    <td class="text-primary">Intelectual</td>
    <td class="text-white text-center"><?php $biorritme->calcularIntellectual(); ?></td>
  </tr>
</table>

<div class="mt-5">
  <div class="progress mb-3 w-50 mx-auto">
      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php $biorritme->calcularFisic(); ?>" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><?php $biorritme->calcularFisic(); ?></div>
    </div>
    <div class="progress mb-3 w-50 mx-auto">
      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?php $biorritme->calcularEmocional(); ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php $biorritme->calcularEmocional(); ?></div>
    </div>
    <div class="progress mb-3 w-50 mx-auto">
      <div class="progress-bar progress-bar-striped bg-succes" role="progressbar" style="width: <?php $biorritme->calcularIntellectual(); ?>"aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php $biorritme->calcularIntellectual(); ?></div>
  </div>
</div>
</body>




