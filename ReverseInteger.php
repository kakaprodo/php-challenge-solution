<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $reverse = array_reverse(str_split($x));
    
        if ($reverse[count($reverse)-1] == '-') {
            array_pop($reverse);
            $reverse = array_prepend($reverse, '-');
        }
    
        $number = implode('', $reverse);
    
        return (int) $number;
    }
}