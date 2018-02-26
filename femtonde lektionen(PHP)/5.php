<!-- 5
Skriv en funktion som gör om alla nyrader i en sträng till <br>-element. 
Funktionen ska ta strängen som parameter och returnera en ny sträng.
En nyrad i PHP skrivs ut med \\n. -->
<?php 
function newline($br){

    echo "<div>heeej</div\n $br";
    echo "<h1>Det är här $br det ska skrivas $br massa information</h1>";
}

newline("<br/>");

echo ("hej \n då");

echo nl2br("You will find the \n newlines in this string \n on the browser window.");