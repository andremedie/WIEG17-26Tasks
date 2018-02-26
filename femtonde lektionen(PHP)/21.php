<!-- 21
Skriv en funktion som räknar hur många udda tal det finns i en array. -->
<?php
$array = array(
    1, 2, 3, 4, 5, 6, 7, 8, 9
);


function uddaTal($array) {
    $odds = 0;
    $even = 0;
    foreach($array as $value) {
        if ($value & 1){
            echo "udda ";
            $odds += 1;
        } else {
            echo "jämn ";
            $even += 1;
        }
    }

    echo $odds;

};

uddaTal($array);
