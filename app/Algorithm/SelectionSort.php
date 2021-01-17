<?php

    namespace App;
  class SelectionSort
  {

    private $unOrdredList;

    public function setUnOrdredListList(array $unOrdredList)
    {
      $this->unOrdredList = $unOrdredList;
    }

    private function findMinimum($list){
        $minimumValue = $list[0]  ;  //Store the smallest value
        $smallestIndex = 0  ;        //Store the index of the smallest value
        for($i = 0 ; $i < count($list) ; $i++ ){

            if($list[$i] < $minimumValue ){
                $minimumValue = $list[$i];
                $smallestIndex = $i ; 
            }
        }
            return $smallestIndex ; 
    }

    // Now you can use this function to write selection sort:
    public function selectionSort($arr)
    {
        $newArr=[]; 
        $arrLength =  count($arr);
        for ($k = 0 ; $k < $arrLength ; $k++ ){
            
            $smallest = $this->findMinimum($arr) ;
            array_push($newArr , array_splice($arr , $smallest, 1)[0]);
        }
        return $newArr ; 
    }

}