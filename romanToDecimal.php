<?php

class Solution {

    private $symbolValues = [
        'i' => 1,
        'v' => 5,
        'x' => 10,
        'l' => 50,
        'c' => 100,
        'd' => 500,
        'm' => 1000
    ];
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanString = strtolower($s);
        $sysmbols = str_split($romanString);

        $decimalValues = array_map(function ($sysmbol) use($symbolValues) {
            return $this->symbolValues[$sysmbol] ?? 0;
        },  $sysmbols);

        $sumSymbol = 0;

        foreach ($decimalValues as $key => $decimalValue) {

            if ($decimalValue < next($decimalValues)) {
                continue;
            } else {
                $previousNumber = $decimalValues[$key-1] ?? 0;

                if ($previousNumber < $decimalValue) {
                    $value = $decimalValue - $previousNumber;
                } else {
                    $value = $decimalValue;
                }

                $sumSymbol = $sumSymbol + $value;
            }
        }

        return $sumSymbol;
    } 
    
}