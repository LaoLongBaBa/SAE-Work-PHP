<?php
$a = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
asort($a);
print_r($a);

echo "<br>";
ksort($a);
print_r($a);

echo "<br>";
arsort($a);
print_r($a);

echo "<br>";
krsort($a);
print_r($a);