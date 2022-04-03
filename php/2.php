<?php

// numeric array
$x = array("raj", 12);
echo $x[0]; //raj
print"<pre>";
print_r($x);

//associative array
$arr = array("name"=> "raj", "age"=>12);

echo $arr['name'];
echo "$arr[name]";

print"<pre>";
print_r($arr);

// method 1 - with array function
$arr = array("name"=> "raj", "age"=>12);

// method 2 - direct with keys
$arr['name'] = 'raj';
$arr['age'] = 12;
