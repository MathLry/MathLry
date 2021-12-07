<?php

    $nbrRicard = 0;
    
    do {
        $nbrRicard++;
        if ($nbrRicard == 3) {
            echo "I'll have to stop soon!\n";
            continue;
        }

        if ($nbrRicard == 5) {
            echo "I am no longer very fresh ...\n";
            continue;
        }
    } while ($nbrRicard<7);
?>