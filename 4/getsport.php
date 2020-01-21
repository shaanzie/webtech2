<?php
  // extract($_GET);
  extract($_POST);

  if($ath == "VK47"){
    $res = array("sport"=>"football","country"=>"portugal");
  }

  echo json_encode($res);

?>
