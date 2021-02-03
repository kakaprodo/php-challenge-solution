<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        if (! $this->isInteger($x)) return 0;
        
        $reverse = array_reverse(str_split($x));

        if ($reverse[count($reverse)-1] == '-') {
            array_pop($reverse);
            array_unshift($reverse, '-');
        }

        $number = (int) implode('', $reverse);

        return $this->isInteger($number) ? $number : 0;
    }
    
    private function isInteger($number) {
        return ($number >= (pow(-2,31) - 1)) 
               && ($number <= (pow(2,31) - 1));
    }
}