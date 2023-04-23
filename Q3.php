<?php
echo<<<___END
<html>
<body>
<form action="Q3.php" method="post" >

Select language:
<select name="greetings" >

<option value=0>--select--</option>
<option value="eng" >Eng</option>
<option value="tamil" >tamil</option>
<option value="French" >French</option>
<option value="spanish" >Spanish</option>

</select>

<button type="submit" >Submit</button>
</form>
</body>
</html>
___END;

$option="";

if(isset($_POST["greetings"])) $option= $_POST["greetings"];

switch($option){
    case "tamil":
        echo "Namaste";
        break;
    case "eng":
        echo "Hello";
        break;
    case "French":
        echo "Bonjour";
        break;
    case "spanish";
        echo "Hola";
        break;

}

?>
