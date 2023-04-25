<?php
if (mt_rand(0,1)){
?>
<br> 
<p style="color:green" >hello:1</p>;
<?php
// //1
// define("pi", 3.14159);
// define("promien", 25);
// $pot = promien**promien;
// echo pi*$pot."<br>";
// echo pi*promien;

// //2
// define("liczba1", 6);
// define("liczba2", 2);
// $suma = liczba1 + liczba2;
// echo "suma wynisi: ".$suma;

//3
// define("liczba1", 2);
// $p1=liczba1<<1;
// $p2=liczba1<<2;
// $p3=liczba1<<3;
// $p4=liczba1<<4;
// echo $p1."," .$p2."," .$p3."," .$p4.",";

// //4
// define("imie", "Maksym");
// define("nazwisko", "Skopych");

// $imie_i_nazwisko = imie." ".nazwisko;
// echo $imie_i_nazwisko;







}

else {
?>
<h2 style="color:red" >hello2</h2>;
<?php
$_POST; // TABLICA ZAWIERAJACA DANNE PRZESLANE NP. FORMULARZU
$_GET; // TABLICA ZAWIERAJACA DANNE PRZESLANE NP. FORMULARZU, ALE STRUMIENIEM OTWARTYM
$_COOKIE; // 
$_SESSION; // MORZNA USTAWICZ CZAS PRZY KTORYM MORZESZ BYC ZALOGOWANY DO STRONY/SERVERU
// boolean / true/false
// array / tablica
// object / objecty
// $tablica = array("WARSZAWA","OPOLE","WROCLAW");
// $tablica1 = ["KIEV","LWOW","CHERNIGOW"];

// echo $tablica[2].", ";

// for( $i=0; $i<=2; $i++){
//     echo "$tablica1[$i]<br>";
// }

// $tab_asoc = array(
//     "imie" => "Maksym",
//     "nazwisko" => "Skopych",
//     "wiek" => 26,
// );
// $tab_asoc1{"imie"}="Maksym";
// $tab_asoc1{"nazwisko"}="skopych";
// $tab_asoc1{"wiek"}=25;

// var_dump($tab_asoc1["imie"]."<br>");

// foreach($tab_asoc as $x){
//     echo "$x<br>";
// }

// $tab_wielow = array(
//     array(
//         "imie" => "Maksym",
//         "nazwisko" => "Skopych",
//         "wiek" => 26,
//     ),
//     array(
//         "imie" => "Ira",
//         "nazwisko" => "Skopych",
//         "wiek" => 27,

//     ),
//     array(
//         "imie" => "Karolina",
//         "nazwisko" => "Popova",
//         "wiek" => 24,
//     ),
// );
// echo $tab_wielow[2]["wiek"]."<br>";

//define("nazwa_stalej", wartosc)   ------ constanta

// define("rok",2023);
// echo "Mamy rok: ".rok;
// $x = 23.444;
// echo $x." <br>";
// settype($x,'string');
// echo "wartosc po zamianie na string = $x"."<br>";
// settype($x,'int');
// echo "wartosc po zamianie na int = $x"."<br>";
//$y = (integer)$x---- zmiana nie na stale


//1 operatory aryfmetychne: + - * / %(reszta z dzielenia) **(potengowanie $a ** $b)

//2 operatory porownalne ==(czy zmienne rowne)/ !=(czy zmienne sa rorzne $a!=$b ) <>(czy zmienne sa rorzne( $a<>$b)) / ===(porownuje i wartosci i typy dannych) / !==
$a =12;
$b ="12";
if($a !== $b){
echo "rowne"."<br>";
}
else{
    echo "nie rowne"."<br>";
};
//3 operatory bitowe  & iloczyn bitowy(AND)
// | suma bitowa (OR)
// ~ negacia bitowa (NOT)
// ^ roznica bitowa 
// << przesuniecie bitow w lewo
// >> przesuniecie bitowe w prawo
//4 operatory logiczne 
// ||/or - suma logiczna ( albo jedna albo druga wrtosc musi byc true)
// and/&& - iloczyn logiczny(kazda liczba musi bycz true)
// ! negacia logiczna ( jezeli 1 wartoscz jest rorzna od 2 wart.)

// 5 operatory przepisania 
// = 
// += np. $a+=5; $a=$a+5;
// -= np  $a-=5; $a= $a-5;
// /=
// %=
// 6 operatory lancuchowe
// . laczenie lancuchow znakowych $x ="moje"." miasto" // "moje miasto"
// .= dolaczanie do lancucha znakowego $x="moje ";$x.=" miasto"; // $x => "moje  miasto"; 

// 7 operatory inkremencjine($i++/++$i)/ dekremencjine(--$i,$i--)
// ++$i przed wykorzystaniem zmiennej; $i++(po wykorzystaniu zmiennej)
}
?>
