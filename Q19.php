<?php


  $str = "hello ## bro ## i ## am ## jitender ## from ## aps ## computer ## science.";
  $arr = explode(" ## ", $str);
  
  foreach($arr as $key => $value) {
    echo "Array[".$key."]= ".$value."<br>";
  }
?>
