<?php

$doc = new DOMDocument();
$doc->loadHTMLFile("https://www.daraz.com.bd/");
$xpath = new DOMXpath($doc);
$imgs = $xpath->query("//img");
for ($i=0; $i < $imgs->length; $i++) {
    $img = $imgs->item($i);
    $src = $img->getAttribute("src");
    echo $src."<br>";
}