<!-- 14
Skriv en funktion som räknar ut summan av alla tal i en array. 
Skriv en annan som räknar ut medelvärdet. -->
<?php

$array = array(
    20,
    44,
    22
);

function summanavallt($array){
    $total = 0;
foreach ($array as $index){
$total += $index;

}
return $total;
}



echo summanavallt($array);