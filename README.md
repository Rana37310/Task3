# Task3
To run the code, execute the 'main' class.
Find Max and Min in Array
 You are given an array of integers. Write a PHP function that finds the 
maximum and minimum values in the array. Explain the time complexity of your 
solution.
---Answer:
The time complexity differs depending on the search method used on the array.
I used iteration to find the minimum value, which costs O(n). For finding the maximum value,
I applied a max-heap, which performs in O(n log n) in the worst case.
It is clear that max-heap search has better efficiency than the iteration one.

