<?php

    function getFloor(int $floor, int $direction = null, array $buttons){
           
    }

    function getDirection(int $floor, int $direction = null, array $buttons){
        while ($buttons != $floor)
        {
            if ($floor == $direction) {
                return 0;
            }
            else {
                while ($floor != $direction) {
                    if ($floor > $direction) {
                        return -1;
                    }
                    else {
                        return +1;
                    }
                }
            }
        }
    }
?>