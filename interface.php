<?php
 #contoh implementasi interface
 interface pembayaran{
     
     public function proses pembayaran();

 }

 #contoh implementasi class
 class transferbank implements pembayaran{

    public function prosespembayaran(){
        echo "pembayaran melalui transfer bank";
    }
 
    }

    class ewallet implements pembayaran{
        
         public function pembayaran() {
            echo "pembayaran melalui e-wallet";
         }

    }
    
    class kartukredit implements pembayaran{

         public function prosespembayaran() {
         echo "pembayaran melalui kartu kredit";
         }
    
    }

    #contoh pemangilan
     $p1 = new transferbank();
     $p2 = new ewallet();
     $p3 = new kartukredit();

     $p1->prosespembayaran();
     echo "<br>";

     $p2->prosespembayaran();
     echo "<br>";


     $p3->prosespembayaran();
     ?>
