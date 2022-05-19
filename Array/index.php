<?php
//numeric array
$car = array('mazda', 'honda', 'bmw');

array_push($car, 'new', 'old');
array_pop($car);
$bad = ['fk', $car];

//var_dump($car);
echo '<pre>';
print_r($bad);

echo count($car);

echo '</pre>';

$user = ['Joe', 'Smith', 29];
//associative array
$Joe = [
    'name' => 'Joe',
    'lastname' => 'Smith',
    'age' => 29,
];

unset($Joe['age']);

var_dump($Joe);