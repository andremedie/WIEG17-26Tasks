<!-- 3
Nu har vi två funktioner som vi kan använda för att skapa HTML-paragrafer och headings. 
Men det blir väldigt många funktioner om vi ska ha en funktion för varje möjligt HTML-element.

Vi behöver en funktion som kan göra flera sorters element. 
Skriv en funktion make_tag som kan göra alla sorters HTML-element. -->
<?php

//function make_tag();


function make_heading($text, $tag) {

echo "<$tag> $text </$tag>";



}

make_heading("Hej å håå", "h1");

make_heading("minnnya text", "p"); 
make_heading("Tjabba, prövar denna:", "h3");