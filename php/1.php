<?php
// Array
// 1. Numeric Array
// 2. Associative Array
// 3. Multi-diamensional Array

// Numeric Array
$arr = array(10,20,30,40);

echo $arr[2];

// debug purpose
print "<pre>";
print_r($arr);


// method 1 - with array function
// $x = array(10,20,30,40);

// method 2- direct with keys
// $x[0] = 10;
// $x[1] = 20;
// $x[2] = 30;


// method 3 - direct without keys
$x[] = 10;
$x[] = 20;
$x[] = 30;
$x[100]= 33;
$x[] = 44;

print_r($x);
