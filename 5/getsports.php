<?php
  // extract($_GET);
  extract($_POST);

  if($ath == "VK47"){
    $res = array("sport"=>"football","country"=>"portugal");
  }
  if($ath == "RS13") {
    $res = array("sport"=>"mango collector", "country" => "latvia");
  }
  if($ath == "VV44") {
    $res = array("sport"=>"cars", "country" => "sudan");
  }
  echo json_encode($res);

?>
