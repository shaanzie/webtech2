<?php

    /*
    The buffer will be controlled by the programmer, by explicitly flushing the buffer at regular intervals.
    */

    ob_start();
    echo str_pad("", 1024);  // For firefox, to change the buffer size, will work without on chrome.
    ob_flush();
    flush();
    for($i = 0; $i < 20; $i++) {
        echo "Count ".$i."</br>";
        ob_flush();
        flush();
        sleep(3);
    }

?>