<!-- 9
Förbättra funktionen så att den lägger till en rad sist i tabellen, 
med summan av alla siffror i varje kolumn. 
Du kan anta att arrayen innehåller tal. -->
<?php
$array = array (
    array ("Andre", 22, 111),
    array("Johan", 34 , 322),
    array ("Jocke", 24, 233)
    );
    
    function arrayinArray($array){
        foreach ($array as $index){
        $total += $index[1];
        $total2 += $index[2];
        echo 
            "
            <table border = '1' style='width: 40% text-align: center;'>
            <tr>
            <th>$index[0]</th>
            <th>$index[1]</th>
            <th>$index[2]</th>
            </tr>
            </table>
            ";
        }
        echo "<th>Totalt1</th>
        $total
            <th>Totalt2 =</th>
            $total2";
    }
    
    arrayinArray($array);