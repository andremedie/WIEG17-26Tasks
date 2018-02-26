<!-- 15
Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. 
Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.

Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver. -->
<?php
$array = array(
    "måndag" => 1,
    "tisdag" => 2,
    "onsdag" => 3,
    "torsdag" => 4,
    "fredag" => 5,
    "lördag" => 6,
    "söndag" => 7
     
);




function Weekdays($day, $array){
$arrayinSmall = strtolower($day);
foreach($array as $keys => $value){

    if($arrayinSmall == $keys) {
        echo "<h1>$value</h1>";
    }
    
}
}

Weekdays("torsdag", $array);

