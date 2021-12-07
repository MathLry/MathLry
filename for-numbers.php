<?php

    for($i=2;$i<=100;$i++){
        $nbDiv = 0; 
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){$nbDiv++;}
        }
        if($nbDiv == 2){
            if ($i == 97) {echo $i;}
            else {echo $i.", ";}
        }
    }
?>