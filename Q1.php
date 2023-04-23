<html>

<body>
<form  method = "POST"> 
 
 <lable>first number</lable> 
 <input type="int" name = "num1"> 
 </br> 
  
 <lable>second number</lable> 
 <input type="int" name = "num2"> 
 </br> 
  
 <lable>third number</lable> 
 <input type="int" name = "num3"> 
 </br> 
  
 <center> 
 <input type= "submit" value = submit> 
 </center> 
 </form> 
</body>
    
</html>


<?php

$n1=$_POST["num1"];
$n2=$_POST["num2"];
$n3=$_POST["num3"];

if ($n1 > $n2 ){
    if($n1 > $n3){
        echo " the greatest number is :".$n1;
        
    }
    else{
        echo " the greatest number is :".$n3;
    }

}
else{
    if($n2 > $n3){
        echo " the greatest number is :".$n2;
        
    }
    else{
        echo " the greatest number is :".$n3;
    }

}

?>