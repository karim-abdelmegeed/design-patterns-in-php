<?php

use \PHPUnit\Framework\TestCase; 
use App\Algorithm\BinarySearch;

class BinarySearchTest extends TestCase
{
    private $binarySearch ; 

    public function setUp(): void
    {
        $this->binarySearch = new BinarySearch;
    }

    public function testAdd()
    {
        $needle = 12 ;
        $array = [1, 3, 5, 7, 9 , 12 , 17 ,21] ;
        $low = 0 ;
        $high = count($array)-1 ;
        $this->binarySearch->setSortedList($array);
        return $this->binarySearch->searchRecursive($needle, $array , $low , $high);
        // return $search->binarySearch($needle, $array , $low , $high);
    }
}