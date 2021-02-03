<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        foreach ($nums as $key1 => $num) {

            foreach ($nums as $key2 => $num2) {
                $nextArrNum = next($nums);
                $sum = $num + $nextArrNum;

                if ($sum == $target) {
                    $firstIndice = $key1;
                    $secondIndice = $key2 + 1;

                    if ($firstIndice != $secondIndice) return [
                        $firstIndice, 
                        $secondIndice
                    ];
                } 

            }
        }

        return [];
    }
}