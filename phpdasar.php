<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php 
$nilai=array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);

echo "total data = ".$a=count($nilai);
echo "<br>";
echo "rata rata = ".array_sum($nilai)/count($nilai);
echo "<br>";

$z = array_unique($nilai);

sort($z);
$b = count($z);
for($x = 11; $x < $b; $x++) {
  echo $z[$x];
  echo " ";
}
echo "<br>";

rsort($z);
$b = count($z);
for($x = 11; $x < $b; $x++) {
  echo $z[$x];
  echo " ";
}
echo "<br>";


function Countt($str) 
{ 
    $upper = 0;  
    $lower = 0; 
    $number = 0; 
    $special = 0; 
    for ($i = 0; $i < strlen($str); $i++) 
    { 
        if ($str[$i] >= 'A' &&  
            $str[$i] <= 'Z') 
            $upper++; 
        else if ($str[$i] >= 'a' &&  
                 $str[$i] <= 'z') 
            $lower++; 
        else if ($str[$i]>= '0' &&  
                 $str[$i]<= '9') 
            $number++; 
        else
            $special++; 
    } 
    echo "Kapital : " , $upper,"<br>" ; 
    echo "Non Kapital : " ,$lower,"<br>" ; 
    echo "Angka : " , $number ,"<br>"; 
    echo "Spesial Karakter : ", $special ; 
}  
    $str = "#BlaNCaMadE@gmaiL.com123"; 
    echo "Kata : ".$str."<br>";
    Countt($str);
  
echo "<br>";   
$ibu ="Jakarta adalah ibu kota negara Republik Indonesia";
$asd = explode(" ",$ibu);
echo "unigram : ".implode(", ",$asd);
echo "<br>";

function explodeEveryNth($delimiter, $string, $n) {
  $arr = explode($delimiter, $string);
  $arr2 = array_chunk($arr, $n);
  $out = array();
  for ($i = 0, $t = count($arr2); $i < $t; $i++) {
      $out[] = implode($delimiter, $arr2[$i]);
  }
  return $out;
}
$bigram = explodeEveryNth(' ', $ibu, 2);

$trigram = explodeEveryNth(' ', $ibu, 3);

echo "bigram : ".implode(", ",$bigram);
echo "<br>";
echo "trigram : ".implode(", ",$trigram);







?> 
