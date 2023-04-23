<?php
  $names = array("jitender", "rahul", "neha", "tanu", "ruhi");
  
  foreach($names as $i) {
    if(substr($i, 0, 1) == "A") {
      echo $i;
	  echo "<br>";
    }
  }
?>
