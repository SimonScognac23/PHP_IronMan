
<?php

require_once 'parteAnteriore.php';

class RaggiRepulsori extends ParteAnteriore{

public function attacco(){
  
  echo "Io sono Iron Man e ti distruggo!\n";
}

// tutti i miei oggetti futuri che costruisco partendo da parte anteriore DEVONO IMPLEMENTARE IL METODO  ATTACCO()
// io istruisco il mio programma a definire il comportamento  delle sottoclassi

}

?>