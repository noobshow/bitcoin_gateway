<?php

echo '<h1>Hello World</h1>';
print_r($_GET);
print_r($_POST);

$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
$stringData = "POST ...". print_r($_POST). "\n";
fwrite($fh, $stringData);
$stringData = "GET ...". print_r($_GET). "\n";
fwrite($fh, $stringData);
fclose($fh);
?>
