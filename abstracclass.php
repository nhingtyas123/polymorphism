<?php
# contoh absract class
abstract class kendaraan {

    abstract public function berjalan();

}

#contoh child class
class mobil extends kendaraan {

   public function berjalan() {
     echo"mobil berjalan di jalan raya";
     }

}

class kapal extends kendaraan {

   public function berjalan() {
    echo"kapal berlayar di laut";
   }

}

#pemanggilan
$mobil = new mobil();
$kapal = new kapal();

$mobil->berjalan();
echo "<br>";

$kapal->berjalan();
?>