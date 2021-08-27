<?php

// Declaring numbers
$a=5;
$b=4;
$c=1.2;

// Arithmetic operations
echo ($a+$b)*$c.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a%$b.'<br>';
echo $a/$b.'<br>';

// Assignment with math operators
// $a +=$b; echo $a.'<br>';//$a=9
// $a -=$b; echo $a.'<br>';//$a=1
// $a *=$b; echo $a.'<br>';//$a=20
// $a /=$b; echo $a.'<br>';//$a=1.2
// $a %=$b; echo $a.'<br>';//$a=1

// Increment operator
echo $a++.'<br>';
echo ++$a.'<br>';

// Decrement operator
echo $a--.'<br>';
echo --$a;

// Number checking functions
is_float(1.25);
is_int(5);
is_double(1.25);
is_numeric("3.45");
is_numeric("3g.45");
echo '<br>';
// Conversion
$strNumber='12.54';
// $number=(float)$strNumber;
// $number=floatval($strNumber);//same as above
// $number=(int)$strNumber;
$number=intval($strNumber);//same as above
var_dump($number);
echo "<br>";
// Number functions
echo "abs(-12.42)".abs(-12.42).'<br>';
echo "pow(2,3)".pow(2,3).'<br>';
echo "sqrt(81)".sqrt(81).'<br>';
echo "min(4,5)".min(4,5).'<br>';
echo "max(9,8)".max(9,8).'<br>';
echo "round(2.4)".round(2.4).'<br>';
echo "round(2.6)".round(2.6).'<br>';
echo "floor(2.4)".round(2.4).'<br>';
echo "ceil(2.6)".round(2.6).'<br>';

// Formatting numbers
$number=123456789.12345;
echo number_format($number,2,".",",");

// https://www.php.net/manual/en/ref.math.php
