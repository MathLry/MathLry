<?php

    function reverse(array $array_reverse): array
    {
        return array_reverse($array_reverse);
    }

    function push(array $array_push, string $mot): array
    {
        foreach ($array_push as $key => $mot)
        {
            if (is_array($mot))
            {
                $array_push = array_push($array_push, $mot);
            }
        }
        return $array_push;
    }

    function sum(array $array_sum): int
    {
        return array_sum($array_sum);
    }

    function arrayContains(array $array, int|string|float $belongsToArray): int|string
    {
        if (in_array($belongsToArray, $array, true))
        {
            return $belongsToArray;
        }
        else
        {
            return false;
        }
    }

    function merge(array $array1, array $array2, array $array3)
    {
        return array_merge($array1, $array2, $array3);
    }
?>