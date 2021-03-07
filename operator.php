<?php

//Aritmatika
$hargaDoge = 2;
$rataRata = (8 + 5 + $hargaDoge) / 3;

$namaDepan = "Topi";
$namaLengkap = "{$namaDepan} Peci";

$a = 5;
$a += 10; # sama dengan $a = $a + 10;
echo var_dump($a) . "<br>";

$a -= 10; # sama dengan $a = $a - 10;
echo var_dump($a) . "<br>";

$a *= 10; # sama dengan $a = $a * 10;
echo var_dump($a) . "<br>";

$a /= 10; # sama dengan $a = $a / 10;
echo var_dump($a) . "<br>";

//end of Aritmatika

//Perbandingan
$nilai = 90;
#membandingkan dengan variable
$lulus = $nilai > 80;
echo "{$nilai} > 80 = ";
var_dump($lulus) . "<br>";

#banding langsung dengan angka
echo "3 >= 3 = ";
var_dump(3 >= 3) . "<br>";

echo "3 < 6 = ";
var_dump(3 < 6) . "<br>";

echo "5 <= 3 ";
var_dump(5 <= 3) . "<br>";

#membandingkan antar 2 string
echo "'a' < 'b' = ";
var_dump('a' < 'b') . "<br>";

echo "'abc' < 'b' = ";
var_dump('abc' < 'b') . "<br>";


//operator logika

$a = true && true; #true
$b = true and false; #false
$c = true && false; #false
$d = true || false; #false

#ekspresi berikut akan diselesaikan kiri ke kanan
$a = true && false && false;

#eskpresi yang berada di dalam kurung diselesaikan dahulu
$f = "a" === "a" && ((3 > 5) or 3 + 5 >= 7);

#negasi
$g != true;
$h = !(true && !false);


// INCREMENT

$a = 1;
echo "a = {$a} <br>";
$a++;
echo "a = {$a} <br>";
$a++;
echo "a = {$a} <br>";

#isi dari variable $a dimasukkan lebih dulu ke variable $b
#lalu variable $a menambah dirinya sendiri dengan angka 1
$b = $a++;
echo "b = {$b} <br>";
echo "a = {$a} <br>";


// DECREMENT

$a--;
echo "a = {$a} <br>";
$a--;
echo "a = {$a} <br>";

#isi dari variable $a dimasukkan lebih dulu ke variable $b
#lalu variable $a mengurangi dirinya sendiri dengan angka 1
$b = $a++;
echo "b = {$b} <br>";
echo "a = {$a} <br>";
