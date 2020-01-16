<?php

    extract($_GET);

    $res = "";

    if($srn == "SRN1"){
        $res = "name:abc;gpa:8.0";
    }
    
    if($srn == "SRN2"){
        $res = "name:def;gpa:5.0";
    }

    // echo $res;
    echo "<html>";
    echo "<script>";
    echo "parent.obj.updateDetails('$res');";    
    echo "</script>";
    echo "</html>";
?>