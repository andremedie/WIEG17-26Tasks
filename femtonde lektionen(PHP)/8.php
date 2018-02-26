<!-- 8
Skriv en funktion som gör om en tvådimensionell array till en HTML-tabell. -->

<?php
$array = array (
array ("Andre", 22, 111),
array("Johan", 34 , 322),
array ("Jocke", 24, 233)
);

function arrayinArray($array){
    foreach ($array as $index){
        echo 
        "
        <table>
        <tr>
        <th>$index[0]</th>
        <th>$index[1]</th>
        <th>$index[2]</th>
        </tr>
        </table>
        ";
    }
}

arrayinArray($array);

print_r($array);

// echo $array[1][0];
// echo $array[0][0];
