<?php 
     interface Cars {
        public function brands();
     }

     class Bmw implements Cars {
         public function brands(){
            return "bmw";
         }
     }
     class Ferari  implements Cars {
        public function brands(){
           return "ferarri";
        }
    }

    $bmw = new Bmw;
    $ferari = new Ferari;

    $data = array($bmw,$ferari);
    foreach($data as $value){
        echo $value->brands()."<br>"; 
    }
?>