<!-- 18
Skriv en funktion som räknar ut summan av talen 1 till 100, i en rekursiv och en iterativ version. -->

<?php

$tal = array();

function onetoHundred($tal) {

for( $i=1; $i<=100; $i++ ){

array_push($tal, $i);

}
return $tal;


}

$total = onetoHundred($tal);

print_r($total);

$start = 1;
$end = 100;

$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}

echo "<br/>";

echo "Summa ifrån " . $start . " till " . $end . " = " . $sum;

function reko($tal){
    if (count($tal)==0) {
        return 0;
    } else {
        return array_shift($tal) + reko($tal);
    }
}

echo reko($total);
