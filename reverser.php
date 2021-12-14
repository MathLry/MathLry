<?php

    function reverse($char): String
    {
        return strrev($char);
    }

    function isPalindrome($char): bool
    {
        if (strrev($char) == $char){ 
            return true; 
        }
        else{
            return false;
        }
    }
?>