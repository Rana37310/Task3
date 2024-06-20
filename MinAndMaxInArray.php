<?php
// Class Description: to compute the min and max of an array
// Author: Rana Albedaiwi
// Date : 6/19/2024


 class MinAndMaxInArray
{

    private $array;
    // Constructor to initialize the given array
    public function __construct($arr)
    {
        $this->array=$arr;
    }

    //Finds the min of the array
    public function min()
    {
        $min=$this->array[0];
       for($i=1; $i<count($this->array);$i++)
       {
        $value=$this->array[$i];
        if($min>$value)
        $min=$value;
       }
       return $min;
    }
    //Finds the max of an array using max-heap
    public function max()
    {
       // Create a max-heap object
       $maxHeap = new SplMaxHeap();

       // Add values into the max-heap object
       foreach ($this->array as $value) 
       {
           $maxHeap->insert($value);
       }
       // The maximum value is at the top of the max-heap
       return $maxHeap->top();
   
    }


}

?>