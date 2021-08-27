<?php

// Create array
$fruits=["Banana","Apple","Orange"]; 

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[2].'<br>';

// Set element by index
$fruits[0]='Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[3]);//false

// Append element
$fruits[]='Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits,'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits,'Bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);

// Split the string into an array
$string="Banana,Peach,Apple";
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';

// Combine array elements into string
echo implode("&",$fruits);

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple',$fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Apple',$fruits));
echo '</pre>';

// Merge two arrays
$vegetable=["Potato","Onion"];
echo '<pre>';
var_dump(array_merge($fruits,$vegetable));
var_dump([...$fruits,...$vegetable]);
echo '</pre>';

// Sorting of array (Reverse order also)
echo '<pre>';
var_dump($fruits);
echo '</pre>';

sort ($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person=[
    '$name'=>'Saddam',
    '$surname'=>'Hawari',
    '$age'=>20,
    'hobbies'=>['Tennis','cricket']
];
echo '<pre>';
var_dump($person);
// print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person ['channel']='Hussain Blog';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address'])){
//     $person['address']='unknown';
// // }
$person['address']??='unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// // Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// // Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// // Sorting associative arrays by values, by keys
asort ($person);
echo '<pre>';
var_dump($person);
echo'</pre>';


// // Two dimensional arrays
$todo = [
    ['tittle'=>'Todo tittle 1','completed'=>true],
    ['tittle'=>'Todo tittle 1','completed'=>true],
];
echo '<pre>';
var_dump($todo);
echo'</pre>';