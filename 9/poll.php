<?php

    ob_start();
    echo str_pad("", 1024);
    ob_flush();
    flush();
    for($i = 0; $i < 20; $i++) {
        echo "Count ".$i."</br>";
        ob_flush();
        flush();
        sleep(3);
    }

?>