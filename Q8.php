<?php
echo<<<___END
<html>
<body>
<form method="post">
  <label for="string">Enter a string:</label>
  <input type="text" name="string" id="string">
  <input type="submit" value="Reverse">
</form>
</body>
</html>
___END;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $string = $_POST['string'];
  $reverse = strrev($string);
  echo "The reverse of the string ".$string. " is ".$reverse;
}

?>


