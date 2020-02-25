<?php
    // ob_start();
    // ob_flush();
    // flush();
    // sleep(12);
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

            $res = "<i>Your friend says </i>".$data." at <b>".date("H:i:s", $time)."</b><br>";
            echo "<script>parent.obj.updateDiv('".$res."');</script>";

            ob_flush();
            flush();
        }
        else {
            echo "<script>parent.obj.heartbeat();</script>";
        }
        sleep(3);
    }
?>