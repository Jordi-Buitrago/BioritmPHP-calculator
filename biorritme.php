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



  public function __construct($data, $name){

    $dataNow = new DateTime();
    $dataUser = new DateTime ($data);
    $this->diferencia = $dataUser->diff($dataNow)->days;
    $this->nom = $name;

  }

  private function formula($ciclo){
    return round(sin(2 * pi() * ($this->diferencia / $ciclo)), 2);
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
