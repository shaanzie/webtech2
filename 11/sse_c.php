<?php

    header("Content-type:text/event-stream");
    ob_start();
    ob_flush();
    flush();
    for($i = 0; $i < 5; $i++) {
        
        // Send count $i

        echo "event:ev1\n";
        echo "retry:700\n";
        echo "data:Student".$i."\n";
        echo "data:Count".$i."\n\n";
        ob_flush();
        flush();

        sleep(10);
    }
    echo "event:close\n";
    echo "data:its done\n\n";
    ob_flush();
    flush();
?>