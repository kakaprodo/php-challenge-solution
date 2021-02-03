<?php

class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        
        foreach ($nums as $num) {

            foreach ($nums as $num2) {
                $nextArrNum = next($nums);
                $sum = $num + $nextArrNum;

                if ($sum == $target) {
                    $firstIndice = array_search($num, $nums);
                    $secondIndice = array_search($nextArrNum, $nums);

                    if ($firstIndice != $secondIndice) return [
                        array_search($num, $nums), 
                        array_search($nextArrNum, $nums)
                    ];
                } 
                
            }
        }

        return [];
    }
}