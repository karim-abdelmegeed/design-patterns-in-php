<?php

  namespace App\Algorithm;

  class BinarySearch
  {

    private $sortedList;

    public function setSortedList(array $sortedList)
    {
      $this->sortedList = $sortedList;
    }

    public function binarySearch($needle, $array, $low, $high) {
      while ($low <= $high) {
        $middle = intVal(($low + $high) / 2);
        $guess = $array[$middle];
        if ($guess == $needle) {
          return $middle;
        }
        else if ($guess > $needle) {
          $high = $middle - 1;
        } else {
          $low = $middle + 1;
        }
      }
      return 0;
    }

    public function searchRecursive($needle, $array , $low , $high) {
      if ($low <= $high) {
        $middle = intVal(($low + $high) / 2);
        $guess = $array[$middle];
        if ($guess == $needle) {
          return $middle;
        }
        else if ($guess > $needle) {
          $this->searchRecursive($needle, $array, $low, $middle - 1);
        } else {
          $this->searchRecursive($needle, $array, $middle + 1, $high);
        }
      }
      return 0;
    }
}
