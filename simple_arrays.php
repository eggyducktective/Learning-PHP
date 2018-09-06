<?php
$odd_numbers = [1,3,5,7,9];
$first_odd_number = $odd_numbers[0];
$second_odd_number = $odd_numbers[1];

echo "The first odd number is $first_odd_number\n";
echo "The second odd number is $second_odd_number\n";
$odd_numbers[5] = 11;
print_r($odd_numbers);

echo count($odd_numbers);
echo "\n";
unset($odd_numbers[2]);
print_r($odd_numbers);

echo "\n";

$even_numbers = [0, 2, 4, 6, 8];
$first_item = reset($even_numbers);
echo $first_item;
echo "\n";
print_r($even_numbers);
?>
