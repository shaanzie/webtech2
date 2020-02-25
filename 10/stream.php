<?php
    // ob_start();
    // ob_flush();
    // flush();
    $time = filemtime("data.txt");
    clearstatcache();
    date_default_timezone_set("Asia/Calcutta");
    while(true) {
        clearstatcache();   // Clears static cache
        if(filemtime("data.txt") > $time)
        {
            // echo filemtime("data.txt");
            $time = filemtime("data.txt");
            $file = fopen("data.txt","r");
            $data = fread($file, filesize("data.txt"));

            echo "<i>Your friend says </i>".$data." at <b>".date("H:i:s", $newtime)."</b><br>";

            ob_flush();
            flush();
        }
        sleep(3);
    }
?>