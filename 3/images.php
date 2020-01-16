<?php

      // get user input

      header("Content-type:image/jpeg");

      extract($_GET);

      if($uname == "usr1" || $uname == "usr2" || $uname == "usr3") {
          // Send 1x1 image
          $im = imagecreate(1,1);
      }
      else {
          // Send 2x2 image
          $im = imagecreate(2,2);
      }
      imagecolorallocate($im, 255, 255, 255);
      imagejpeg($im);     // Creates image and pushes it onto a bit stream

?>
