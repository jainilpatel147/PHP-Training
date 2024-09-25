<?php

    function processArguments(...$args) {
        $sum = 0;
        $product = 1;
        $intCount = 0;
        $floatCount = 0;
        $lowercaseCount = 0;
        $uppercaseCount = 0;
        $specialCharCount = 0;

        foreach ($args as $arg) {
            if (is_int($arg)) {
                $intCount++;
                $sum += $arg;
                $product *= $arg;
            } 
            elseif (is_float($arg)) {
                $floatCount++;
                $sum += $arg;
                $product *= $arg;
            } 
            elseif (is_string($arg)) {
                for ($i = 0; $i < strlen($arg); $i++) {
                    $char = $arg[$i];
                    if (ctype_lower($char)) {
                        $lowercaseCount++;
                    } elseif (ctype_upper($char)) {
                        $uppercaseCount++;
                    } elseif (!ctype_alnum($char)) {
                        $specialCharCount++;
                    }
                }
            }
        }

        echo "Sum of all arguments: $sum<br>";
        echo "Product of all arguments: $product<br>";
        echo "Count of integer arguments: $intCount<br>";
        echo "Count of float arguments: $floatCount<br>";
        echo "Count of lowercase characters: $lowercaseCount<br>";
        echo "Count of uppercase characters: $uppercaseCount<br>";
        echo "Count of special characters: $specialCharCount<br>";
    }   
    processArguments(25, 1.2, 3, 'jainil!', 2.61, 5, 'J@inil!');

?>
