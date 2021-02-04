<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        
        if (! $this->isInteger($x)) return false;
        
        $reversedX = array_reverse(str_split($x));
        
        $palindrome = implode('', $reversedX);
        
        return $x == $palindrome;
    }
    
    private function isInteger($number) {
        return ($number >= (pow(-2,31) - 1)) 
               && ($number <= (pow(2,31) - 1));
    }
}