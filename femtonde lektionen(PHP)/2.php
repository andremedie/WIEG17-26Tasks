<!-- 2
Funktionen make_paragraph är lite begränsad. Tänk om vi vill göra h1-taggar? 
Eller h2, h3 osv. Skriv en ny funktion med namnet make_heading. 
Funktionen behöver veta strängen som ska skrivas ut och vilken heading det ska vara. 
Den behöver alltså två argument. -->

<?php 
function make_heading($text, $tag) {

echo "<$tag> $text </$tag>";



}

make_heading("Hej å håå", "h1");