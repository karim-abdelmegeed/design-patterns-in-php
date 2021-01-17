<?php

use \PHPUnit\Framework\TestCase ; 
use App\Algorithm\SelectionSort;

class SelectionSortTest extends TestCase
{
    private $selectionSort ; 

    public function setUp(): void
    {
        $this->selectionSort = new SelectionSort;
    }
    public function testAdd()
    {
        $needle = 12 ;
        $array = [5, 3, 6,63,5, 7, 8, 2, 10] ;
        $low = 0 ;
        $high = count($array) - 1;
        
        $this->selectionSort->setUnOrdredListList($array);
        return $this->selectionSort->selectionSort($array);
    }
}