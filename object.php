<?php

//object
class Sapa
{
    var $str;
}

//membuat object pesan
$pesan = new Sapa;
$pesan->str = "Hello";
echo $pesan->str;
echo "<br>";

//null

$var1 = NULL;
$var2 = null;


//x pertama diberi nilai 2
$x = 2;
if ($x > 0) {
    echo "bisa dibandingkan karena tidak null";
}

//z diberi nilai null
$z = null;
if ($z > 0) {
    echo "tidak bisa dibandingkan karena null";
}
