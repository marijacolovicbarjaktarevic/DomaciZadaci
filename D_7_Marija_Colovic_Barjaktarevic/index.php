<?php

 //Zadatak-1
 /* 1. Zadatak
 Izvršiti konverziju temperature iz Farenhajta u Kelvine i obratno, ukoliko su date sledeće dve formule:

 Celzijus = (Farenhajt - 32) * 5/9
 Kelvin = Celzijus + 273.15

 Temperaturu u Farenhajtima i Kelvinima zadati samostalno.
 */
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
/* Knjiga ima n poglavlja (broj n unosite sami). 
Čitalac je prvog dana pročitao a poglavlja, a drugog dana dva poglavlja više nego prvog dana.
Na osnovu dodeljenih vrednosti, na ekranu ispisati koliko poglavlja je preostalo čitaocu da pročita do kraja knjige. 
Pretpostaviti da su vrednosti promenljivih n i a ispravno unete.
*/
echo "<br>";
$n = 10;
$a1 = 2;
$a2 = $a1 + 2;
$ostatak = $n - $a1 - $a2;
echo $ostatak;

//Zadatak-3
/*Pera i Mika su kupili dva ista džempera. Pera je dao p dinara, Mika je dao m dinara i dobili su kusur od k dinara. 
Brojeve p, m i k odredite proizvoljno.Na osnosvu unetih vrednosti, na ekranu ispisati koliki kusur treba da dobije Pera,
 koliki kusur treba da dobije Mika, da bi jednako platili svako svoj džemper.*/

echo "<br>";
$p = 1000;
$m = 1200;
$kusur = 500;
$cenaDzempera = ($p + $m - $kusur) /2;
echo $cenaDzempera;
echo "<br>";
$kusurP = $p - $cenaDzempera;
echo $kusurP;
echo "<br>";
$kusurM = $m - $cenaDzempera;
echo $kusurM;
?>



