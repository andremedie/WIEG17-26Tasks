<!-- 7
Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag.

Exempel:
make_list( [1, 2] ) // "<ul> <li>1</li> <li>2</li> </ul>"
 -->

<?php
$make_list = array(
    1, 2 , 3, 4, 5
);


function make_list($tal1, $tal2, $tal3) {
 
    echo "<ul><li>$tal1</li></ul>";
    echo "<ul><li>$tal2</li></ul>";
    echo "<ul><li>$tal3</li></ul>";
 // <li>$tal2</li></ul>";

}
make_list($make_list[0], $make_list[1], $make_list[2]);
