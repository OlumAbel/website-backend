 <?php
 echo "my website <br>";
 $myName = 'rex';

$x = 10;
$y = 5;
echo $x - $y;
echo "<br>";

echo $x + $y;
echo "<br>";

echo$x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** 2;
echo "<br>";

echo $x ** $y;
echo "<br>"; 

//increment and decrement opreators
$x++;

echo $x;

echo "<br>";

$x--;

echo $x;
echo "<br>";

//Assignment operators

$a = 100;
$b = 50;


// addition assignment
$a += $b;

echo "<br>";
echo $a;
echo "<br>";
// subtraction assignment
$a-= $b;
echo $a;
Echo "<br>";

//logical operators
// Examples of logical operators are: AND(&&), OR(||), XOR, NOT(!)

if ($a == 100 && $b == 50 ) {
  echo "WE ARE GOOD TO GO.";
}
Echo "<br>";
Echo "<br>";

if ($a == 100 || $b == 50 ) {
  echo "WE ARE GOOD TO GO.";
}
Echo "<br>";
Echo "<br>";
Echo "<br>";
 
if ($a == 100 XOR $b == 55 ) {
  echo "WE ARE GOOD TO GO.";
}
Echo "<br>";
Echo "<br>";

if (!($a == 101)) {
    echo "WE ARE GOOD TO GO";
}

// 11/4/24

// PHP conditional statements
// there are four 





// if else statement

// else if statement

// if statement
// __________________________
// The if statement is one of the most important statement in php

// Example 
//__________________________

if (7>3) {echo "havse a good day";}
// variable declaration\
$my_name = "abkpt";

echo $present_time = date (format: "h:i");
echo "<br>";

echo "present_time: $present_time<br>";


if ($present_time >= 00.00 && $present_time <12.00) {echo "<h3> good morning, $my_name! </h3>";}

elseif ($present_time >= 12.00 && $present_time <16.00) {echo "<h3> good afternoon, $my_name! </h3>";}

elseif ($present_time >= 16.00 && $present_time <23.59) {echo "<h3> good night, $my_name! </h3>";}

else {echo "<h3> hello, $my_name! </h3>";}

// switch statement
//________________

// $todays = date (format: "D");
// echo "today is" $today <br>";

// switch ($today) {
//      case "mon":



  Echo "<br>";

// php loops

// --while loops

$j =2;
while ($j < 8) {
  echo $j;
  $j++;
}
echo "<br>";

$j =2;
while ($j <= 8){
  echo $j;
  $j++;
}

Echo "<br>";

//--do...while loops

// --for -loops

//foreach -loops

// 11/11/2024

/* $numbers = 1;

echo $numbers."<br>";

$numbers++;

echo $numbers."<br>";

$numbers++;

echo $numbers."<br>"; */

//while loops
/*$numbers = 1;

while ($numbers <= 10) {
  echo $numbers."<br>";
  $numbers++;
} */

// do while loop
/*$numbers = 1;
do {
   echo $numbers."<br>";
  $numbers++;
}while ($numbers <= 10) */

//for ($numbers = 1; $numbers <= 10;) {
  echo $numbers.",<br>";
//}

//for each



echo "i love $cars{0} <br>";
echo "i love $cars{1} <br>";
echo "i love $cars{2} <br>";


$cars = array("BMW", "LEXUS", "FERARRI", "ROSEROIISE");

foreach ($cars as $car) {
  echo "i love $car <br>";
}

function streetname() {
  echo "DLA";
}
streetname();

function streetaddresss(){
  echo "nzenei";
}
streetaddress()

















?>