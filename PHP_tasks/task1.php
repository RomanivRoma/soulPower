<?php

// cont + variables + strings
$str = "Hello, world!<br>";
$a = 4;
$b = 5;
print($str);
echo "$a + $b = " . ($a + $b);

// array and foreach
$arr = array("Roma", "Vania", "Ivan");
$arr2 = [];
$tag = "<h3>List of people in class:</h3><ul>";
foreach($arr as $val){
    $tag .= "<li>$val</li>";
}
$tag .= "</ul>";
echo $tag . "<br>";

// foreach with associative array + associative array
$age = array("John"=>"Programmer", "Pete"=>"Fisher", "Klara"=>"Cleaner");
foreach($age as $name => $job) {
    echo "Job: " . $job . ", Name: " . $name . "<br><br>";
}

// explode, implode
$testStr = "Java, PHP, HTML, CSS, JS";
$exploded = explode(",", trim($testStr));
print_r($exploded);
echo "<br>" . implode(",", $exploded) . "<br><br>";

// variable variables(разыминоание)
$Audi = 120000;
$carName = "Audi";
echo "The cost of $carName is ${$carName}" . "$ <br>";
// or
echo "The cost of $carName is " . $$carName . "$ <br><br>";

// comparisons

// var_dump() function which prints the correct bool value and what data type it is
//var_dump(4);
var_dump($a == $b); // 4 == 5 => false
$a = 5;
var_dump($a == $b); // 5 == 5 => true
$a = "010";
var_dump($a > $b); // 10 > 5 => true
var_dump($a < $b); // 10 < 5 => false
var_dump($a <= $b); // 10 <= 5 => false
var_dump($a >= $b); // 10 >= 5 => true
var_dump($a != $b); // 10 != 5 => true
var_dump($a <> $b); // 10 > 5 => true
var_dump($a <=> $b); // 10 > 5 => 1 Число типа int меньше, больше или равное нулю, когда $a соответственно меньше, больше или равно $b.
$b = "005";
var_dump($a === $b); // 5 === "005" => false Сравнение типо
echo "<br><br>";

// Typecasting
$i = 0;
var_dump($i); //$i is int 0
$i = 20.25;
var_dump($i); //$i is float 20.25
$i = "Hello";
var_dump($i); //$i is string "Hello"

$val = (bool) 0;
var_dump($val);// $val is bool false
$val = (int) $val;
var_dump($val); // $val is int 0
$result = $val - 1 * '20';
var_dump($result); // $result is int -20
var_dump((bool) 1); // return true
var_dump((bool) 0); // return false
var_dump((bool) ""); // return false
var_dump((bool) "ank"); // return true




