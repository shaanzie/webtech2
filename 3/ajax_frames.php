<?php

    extract($_GET);

    $res = "";

    if($srn == "SRN1"){
        $res = "srn:SRN1;name:abc;gpa:8.0";
    }
    
    if($srn == "SRN2"){
        $res = "srn:SRN2;name:def;gpa:5.0";
    }

    // echo $res;
    echo "<script>";
    echo "parent.obj.updateDetails('$res');";    
    echo "</script>";
    ?>