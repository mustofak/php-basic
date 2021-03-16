<?php

// IF
$nilai = 8;

if ($nilai > 7) {
    echo "Nilai kamu bagus <br>";
}

// ELSE
$nilai = 8;

if ($nilai > 9) {
    echo "Nilai kamu bagus <br>";
} else {
    echo "Belajar lagi!! <br>";
}

//else if
$nilai = 7.5;

if ($nilai > 7.5) {
    echo "Nilai kamu bagus <br>";
} elseif ($nilai == 7.5) {
    echo "Nilai kamu KKM <br>";
} else {
    echo "Belajar lagi!! <br>";
}


//SWITCH

$favourite_player = 'uHigh';

switch ($favourite_player) {
    case 'Ryzen':
        echo "My favourite player is Ryzen <br>";
        break;
    case 'uHigh':
        echo "My favourite player is uHigh <br>";
        break;
    case 'Svan':
        echo "My favourite player is Svan <br>";
        break;
    case 'Liquid':
        echo "My favourite player is Liquid <br>";
        break;
    default:
        echo "Saya Suka Semuanya <br>";
}

//WHILE

$max = 0;
echo $i = 0;
echo ",";
echo $j = 1;
echo ",";
$result = 0;

while ($max < 10) {
    $result = $i + $j;

    $i = $j;
    $j = $result;

    $max = $max + 1;
    echo $result;
    echo ",";
}

//DO WHILE
/** $handle = fopen("file.txt", "r");
if ($handle) {
    do {
        $line = fgets($handle);
    } while ($line !== false);
}
fclose($handle); */


echo "<br>";

//FOR (Perulangan)
for ($i = 1; $i <= 10; $i++) {
    echo sprintf("The square of %d is %d.<br>", $i, $i * $i);
}

//foreach
$fruits = array('apple', 'banana', 'orange', 'grapes');
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "<br>";
}

$employee = array('name' => 'Jonh Cena', 'age' => 30, 'profession' => 'Gamer');
foreach ($employee as $key => $value) {
    echo sprintf("%s: %s<br>", $key, $value);
    //echo "<br>";
}
