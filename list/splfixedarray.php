<?php declare(strict_types = 1);

$startTime = microtime(true);

$values = new SplFixedArray(1000000);

for ($i = 0; $i < 1000000; $i++) {
    $values[$i] = $i;
}

$endTime = microtime(true);

echo 'Memory usage with SPL array: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for population: ' . ($endTime - $startTime) . "\n";

$startTime = microtime(true);

$sum = 0;

for ($i = 0; $i < $values->getSize(); $i++) {
    $sum += $values->offsetGet($i);
}

$endTime = microtime(true);

echo 'Memory usage when calculating sum of array: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for calculating sum of array: ' . ($endTime - $startTime) . "\n";

// Get element with array_keys
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    $index = random_int(0, 999999);
    $values->offsetGet($index);
}

$endTime = microtime(true);

echo 'Memory usage when getting an item: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for getting an item: ' . ($endTime - $startTime) . "\n";

// Shift
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    array_shift($values);
}

$endTime = microtime(true);

echo 'Memory usage when shifting: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for shifting: ' . ($endTime - $startTime) . "\n";

// Unshift
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    array_unshift($values, $i);
}

$endTime = microtime(true);

echo 'Memory usage when unshifting: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for unshifting: ' . ($endTime - $startTime) . "\n";


// Slice
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    $index = random_int(0, 500000);
    $length = $index = random_int(0, 499999);
    $slice = new SplFixedArray($length);
    $values->rewind();
    for ($j = 0; $j < $length - 1; $j++) {
        $slice[$j] = $values->offsetGet($index + $j);
    }
}

$endTime = microtime(true);

echo 'Memory usage when slicing: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for slicing: ' . ($endTime - $startTime) . "\n";
