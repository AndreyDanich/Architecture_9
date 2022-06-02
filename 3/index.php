<?php
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

$num = 2;

$myArray = [1, 2, 15, 25, 2, 13];


echo "Линейный поиск".PHP_EOL;
echo linearSearch($myArray, $num).PHP_EOL;

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($myArray, $num).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($myArray, $num);

