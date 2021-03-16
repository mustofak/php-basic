<?php


$nama = 'topipeci';

$pesan = "Selamat datang {$nama}";
$pesan2 = 'Selamat datang {$nama}';

//ketika di echo akan berbeda
echo $pesan . '<br>';
echo $pesan2 . '<br>';


//String Manipulation with (.)
$namaDepan = "Topi";
$namaBelakang = "Peci";

$namaLengkap = $namaDepan . ' ' . $namaBelakang;

echo $namaLengkap . '<br>';

//String Manipulation with operator
$namaDepan1 = "Topi";
$namaDepan1 .= " Peci";

echo $namaDepan1 . '<br>';

$i = 5;
echo "Hasil akhir : " . ($i + 3);

//String manipulation with backslah

echo "Baris\nbaru <br>"; #bekerja hanya dalam console, tidak di HTML
echo 'Baris\nbaru <br>'; # ditampilkan apa adanya, \n tida direplace dg sesuatu

echo "Hello\rWorld <br>";
echo 'Hello\rWorld <br>';

echo "<pre>Hello\tWorld</pre> <br>";
echo '<pre>Hello\tWorld</pre> <br>';


$cek = "HAHAHAHAH";

echo "<p>{$cek}</p>";
echo "Panjang Karakter : " . strlen($cek) . "<br>";
