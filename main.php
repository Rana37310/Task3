<?php
// Class Description: to present the min and max of an array
// Author: Rana Albedaiwi
// Date : 6/19/2024
/*
You are given an array of integers. Write a PHP function that finds the 
maximum and minimum values in the array. Explain the time complexity of your 
solution.

The time complexity differs depending on the search method used on the array.
I used iteration to find the minimum value, which costs O(n). For finding the maximum value,
I applied a max-heap, which performs in O(n log n) in the worst case.
It is clear that max-heap search has better efficiency than the iteration one.

*/

require_once 'MinAndMaxInArray.php'; 

// Example of given array
$array = array(3, 1, 4, 1, 5, 9, 0, 6);

// Create an instance of the MinAndMaxInArray class
$minAndMax = new MinAndMaxInArray($array);

// Find and print the minimum value
$minValue = $minAndMax->min();
echo "The minimum value in the array using iteration search is : " . $minValue . "\n"; 

// Find and print the maximum value
$maxValue = $minAndMax->max();
echo "The maximum value in the array using max-heap search is: " . $maxValue . "\n"; 

?>
