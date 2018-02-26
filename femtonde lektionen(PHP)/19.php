<!-- 19
Förbättra båda versionerna av funktionen 
så att det går att ställa in det första och det sista talet som argument. -->
<?php
$tal = array();

function onetoHundred($tal, $start, $stopp) {

for( $i=1; $i<=$stopp; $i++ ){

array_push($tal, $i);

}
return $tal;


}

$total = onetoHundred($tal, "10", "200");

print_r($total);

$start = 1;
$end = 100;

$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}

echo "<br/>";

echo "Summa ifrån " . $start . " till " . $end . " = " . $sum;



// function hej($argument1, $argument2){

// }

// hej("argument1","argument2");