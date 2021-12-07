<?php

    $nbrRicard = 0;
    
    do {
        $nbrRicard++;
        if ($nbrRicard == 3) {
            echo "I'll have to stop soon!";
            continue;
        }

        if ($nbrRicard == 5) {
            echo "I am no longer very fresh ...";
            continue;
        }
    } while ($nbrRicard<7);
?>