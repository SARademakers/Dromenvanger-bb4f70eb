<?php
$array = array();
echo ("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL);
$aantal = readline();
if (is_numeric($aantal)) {
} else {
    exit($aantal . " " . "is niet numeric");
}
for ($i = 0; $i < $aantal; $i++) {
    echo ("Wat is jouw naam?"). PHP_EOL; 
        $naam = readline();
    echo ("Hoeveel dromen ga je opgeven?" . PHP_EOL);
    $aantal2 = readline();
    if (is_numeric($aantal2)) {
    } else {
        exit($aantal2 . " " . "is niet numeric");
    }
    $array[$naam] = array();
	for ($f = 0; $f < $aantal2; $f++) {
    echo ("Wat is jouw droom?" . PHP_EOL);
        $input = readline();
        array_push($array[$naam],$input);
    }
}
foreach ($array as $naam => $dromen) {
    foreach ($dromen as $input) {
       echo ($naam. " heeft dit als droom: " . $input . PHP_EOL);  
    }
}
?>