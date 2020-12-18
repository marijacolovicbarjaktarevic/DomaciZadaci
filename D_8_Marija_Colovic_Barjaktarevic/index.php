<?php
//Zadatak1
/*Da bi gosti kafića mogli na distanci da sede tokom pandemije, ministarstvo je uvelo meru da za svakog čoveka 
mora biti obezbeđeno 3m2  površine lokala. Za posmatrani kafić su dati podaci da ima v m2 i da je u
 njemu trenutno n gostiju. Brojeve v i n određujete sami. 
Vaš zadatak je da ispišete DA zelenom bojom ukoliko se kafić prema unetim podacima pridržava 
propisane mere ili NE crvenom bojom ukoliko se kafić ne pridržava propisane mere. 
Ukoliko je ispis NE, crvenom bojom ispisati i koliko ljudi je potrebno da napusti lokal da bi mera bila zadovoljena. 
 */

$v = 30;
$n = 10;
$bojaZ = "green";
$bojaC = "red";
$brojDozvoljenihLjudi = $v / 3;
echo $brojDozvoljenihLjudi;
if ($n <= $brojDozvoljenihLjudi){
    echo "<p style='color: $bojaZ'>DA</p> ";

}
else{
    echo "<p style='color: $bojaC'>NE</p>";
}

//Zadatak2
/*Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna.
 */

$gRacunar = 2020;
$gRodjenja = 2019;
$brojGodina = $gRacunar - $gRodjenja;
echo $brojGodina;
if ($brojGodina >= 18){
    echo "<p>Osoba je punoletna</p>";

}
else{
    echo "<p>Osoba je maloletna</p>";
}




?>