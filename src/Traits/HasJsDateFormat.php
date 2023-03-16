<?php

namespace ShayanYS\IranianDatePicker\Traits;

trait HasJsDateFormat{
    private function makeJsDateFormat(string $format)
    {
        $replacements = ['Y' => 'YYYY', 'd' => 'DD', 'D' => 'dd', 'j' => 'D', 'l' => 'ddd', 'N' => 'd', 'w' => 'd', 'z' => 'DDD', 'W' => 'w', 'F' => 'MMMM', 'm' => 'MM', 'M' => 'MMM', 'n' => 'M', 'o' => 'YYYY', 'y' => 'YY', 'A' => 'a', 'g' => 'h', 'G' => 'H', 'h' => 'hh', 'H' => 'HH', 'i' => 'mm', 's' => 'ss', 'u' => 'X', 'O' => 'ZZ'];

        return strtr($format,$replacements);

    }
}
