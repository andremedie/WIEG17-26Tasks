<!-- 16
Skriv en funktion doubleIt som dubblerar värdet på en variabel som innehåller ett tal och gör det positivt.

Exempel:
doubleIt(5); // 10
doubleIt(-3); // 6 -->
<?php
$x = 17;
$y = -12;

function Dubblera($Number){
    
    $Number = $Number * 2;
    if ($Number > 0) {
        return $Number;
        
    } else {
        
        $Positivtnummer = abs($Number);
        return $Positivtnummer;
    }



}

echo Dubblera($y);

