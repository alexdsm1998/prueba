<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>clase</title>
  <head>
  <body>
    <?php

class ordenador
{

  //propiedades
  public $marcaordenador= 'Asus';
  public $numeroram= '18'

  //método
  public function  mostrarmarcaordenador() {
      echo '<br>';
      echo 'la marca del ordenador es:';
      echo $this->tipo;
      echo '<br>';
  }

  public function mostrarnumeroram() {
      echo '<br>';
      echo 'el número de la ram es:';
      echo $this->tipo;
      echo '<br>';
  
  }
  //setter
  public function setmarcaordenador($cambiarcolormarcaordenador){
    $this->tipo=$cambiarmarcaordenador;
  }
  public function setnumeroram($cambiarnumeroram){
    $this->color=$cambiarnumeroram;
  }

  //getter
  public function getmarcaordenador(){
    echo $this->tipo;
  }
  public function getnumeroram(){
    echo $this->color;
  }


}
?>
  </body>
</html>
