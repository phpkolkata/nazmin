<?php
$arr = array("name"=> "raj", "age"=>12, "class"=>5,"sec"=>"A");

// echo $arr['name']."<br>";
// echo $arr['age']."<br>";
// echo $arr['class']."<br>";

foreach($arr as $v){
    echo $v."<br>";
}

foreach($arr as $k=>$v){
    echo $k.": ".$v."<br>";
}
