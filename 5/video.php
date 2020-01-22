<?php

header("Content-type:video/mp4");

$file = fopen("s.mp4","r");
$data = fread($file, filesize("s.mp4"));
echo $data;

?>
