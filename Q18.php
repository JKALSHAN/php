<?php

$marks = array("Maths"=>90,
               "English"=>93,
		"Computer"=>89,
		"Physics"=>90,
		"Chemistry"=>96);



foreach($marks as $key=>$description)
        echo "$key : $description<br>";

echo "<br>"."Sorted array"."<br>";

ksort($marks);		

foreach($marks as $key=>$description)
        echo "$key : $description<br>";
?>
