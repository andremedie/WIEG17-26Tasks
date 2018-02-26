<!-- 4
Förbättra make_tag så att man kan ange inline styles också. (Eller href för länkar)

Exempel:
<p style="color: hotpink;">exempeltext\</p> -->

<?php

//function make_tag();


function make_heading($text, $tag, $ref, $stil) {

echo "<$tag> $text </$tag>";
echo "$ref Fejjan.com</a>";
echo "<p $stil> tjabba</p>";
echo "";


}

make_heading("Hej å håå", "h1", "<a href='www.facebook.com'>", "style='color: red;'");