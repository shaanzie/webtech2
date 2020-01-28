<?php
  $file = fopen("scores.txt","r");
  $data = fread($file, filesize("scores.txt"));

  $datatosend = trim($data);
  echo $datatosend;
?>
