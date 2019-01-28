<?php declare(strict_types = 1);

$startTime = microtime(true);

$v = new Ds\Deque();

for ($i = 0; $i < 1000000; $i++) {
    $v->push($i);
}

$endTime = microtime(true);

echo 'Memory usage with deque in memory: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for population: ' . ($endTime - $startTime) . "\n";


// Sum
$startTime = microtime(true);

$v->sum();

$endTime = microtime(true);

echo 'Memory usage when calculating sum of deque: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for calculating sum of deque: ' . ($endTime - $startTime) . "\n";

// Get n-th
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    $index = random_int(0, 999999);
    $x = $v->get($index);
}

$endTime = microtime(true);

echo 'Memory usage when getting an item: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for getting an item: ' . ($endTime - $startTime) . "\n";

// Shift
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    $v->shift();
}

$endTime = microtime(true);

echo 'Memory usage when shifting: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for shifting: ' . ($endTime - $startTime) . "\n";

// Unshift
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    $v->unshift($i);
}

$endTime = microtime(true);

echo 'Memory usage when unshifting: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for unshifting: ' . ($endTime - $startTime) . "\n";


// Slice
$startTime = microtime(true);

for ($i = 0; $i < 1000; $i++) {
    $index = random_int(0, 500000);
    $length = random_int(0, 499999);
    $x = $v->slice($index, $length);
}

$endTime = microtime(true);

echo 'Memory usage when slicing: ' . memory_get_peak_usage(true) . "\n";

echo 'Time needed for slicing: ' . ($endTime - $startTime) . "\n";
