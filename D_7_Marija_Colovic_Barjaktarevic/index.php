<?php

 //Zadatak-1
 $farenhajt = 70;
 $celzijus = ($farenhajt - 32) * 5 / 9;
 $kelvin = $celzijus + 273.15;
 echo $kelvin . "Kelvina";
 echo "<br>";

 $kelvin = 350;
 $celzijus = $kelvin - 273.15;
 $farenhajt = $celzijus / (5 / 9) +32;
 echo $farenhajt . "Farenhajta";

 //Zadatak-2
 echo "<br>";
 $n = 10;
 $a1 = 2;
 $a2 = $a1 + 2;
 $ostatak = $n - $a1 - $a2;
 echo $ostatak;
 
 //Zadatak-3
 echo "<br>";
 $p = 1000;
 $m = 1200;
 $cena = 700;
 $kusurP = $p- $cena;
 echo $kusurP;
 echo "<br>";
 $kusurM = $m - $cena;
 echo $kusurM;


?>
