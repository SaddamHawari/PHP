<?php

// Function which prints "Hello I am Zura"
// function hello()
// {
//     echo "Hello I am Saddam".'<br>';
// }
// hello();
// hello();
// hello();


// Function with argument
// function a($name){
//   return "Hello I am $name";
// }
// echo a('Saddam').'<br>';
// echo a('Bikash').'<br>';

// // Create sum of two functions
// function sum($a,$b)
// {
//     return $a+$b;
// }
// echo sum(5,7);

// Create function to sum all numbers using ...$nums
// function sum(...$num)
// {
//     $sum=0;
//     foreach($num as $n){
//         $sum+=$n;
//     }
//     return $sum;
// }
// echo sum(1,2,3,4,5);    

// Arrow functions
function sum(...$num)
{
 return array_reduce($num, fn($carry, $n)=>$carry+$n );
}
echo sum(1,2,3,4,5);  
