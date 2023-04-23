<?php

$var1 = "100";
$var2 = "+100";

if ($var1 == $var2) {
  echo "var1 is equal to var2 in terms of value";
} else {
  echo "var1 is not equal to var2 (in terms of value)";
}

echo "<br>";

if ($var1 === $var2) {
  echo "var1 is identical to var2 ";
} else {
  echo "var1 is not identical to var2 ";
}

?>
