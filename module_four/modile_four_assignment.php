<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sortByStringLength($a, $b) {
    return strlen($a) - strlen($b);
}

$fruits = ["Banana", "Apple", "Mango", "Orange", "Pineapple", "Grapes"];
usort($fruits, 'sortByStringLength');

print_r($fruits); // output: ["Apple", "Mango", "Banana", "Grapes", "Orange", "Pineapple"]


// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function stringConcat($str1, $str2) {
    $len1 = strlen($str1);
    $reverse_substr1 = substr($str1, -$len1);
    $reverse_substr2 = strrev($str2);
    return $reverse_substr1 . $reverse_substr2;
}

echo stringConcat("Hello", "World"); // output: HellodlroW


// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast($arr) {
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$fruits = ["Banana", "Apple", "Mango", "Orange", "Pineapple", "Grapes"];

print_r(removeFirstAndLast($fruits));  // output: ["Apple", "Mango", "Orange", "Pineapple"]


//4. Write a PHP function to check if a string contains only letters and whitespace.
function isAlpha($str) {
    return ctype_alpha(str_replace(' ', '', $str));
}

echo isAlpha("Hello World"); // output: 1


// 5.Write a PHP function to find the second largest number in an array of numbers.
function secondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num > $secondLargest) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo secondLargest($numbers); // output: 9