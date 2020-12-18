<?php
$arr=[
    ['f','g','h','i'],
    ['j','k','p','q'],
    ['r','s','t','u']
];
$cari1 = $arr[0][0].$arr[0][1].$arr[0][2].$arr[0][3];
$cari2 = $arr[1][0].$arr[1][1].$arr[1][2].$arr[1][3];
$cari3 = $arr[2][0].$arr[2][1].$arr[2][2].$arr[2][3];

$fullcari = $cari1.$cari2.$cari3;

$a = $_POST["a"];


if($a == $cari1)
{
    echo "input yang anda masukan ada di array : ".$cari1;
}elseif($a == $cari2)
{
    echo "input yang anda masukan ada di array  : ".$cari2;
}elseif($a == $cari3)
{
    echo "input yang anda masukan ada di array  : ".$cari3;
}elseif($a = $fullcari)
{
    echo "input yang anda masukan ada di array  : ".$fullcari;
}else
{
    echo "input yang anda masukan tidak ada di array!";
}




?>